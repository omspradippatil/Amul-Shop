<?php
require_once 'includes/session.php';
require_once 'config/database.php';

checkLogin();

// Only allow admin access
if (!isAdmin()) {
    header('Location: dashboard.php');
    exit();
}

$page_title = "Admin Tools";
$page_subtitle = "Advanced administrative functions";

// Get database connection
$database = new Database();
$db = $database->getConnection();

$success_message = '';
$error_message = '';

// Handle bulk operations
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['action'])) {
        
        // Clear all contact messages
        if ($_POST['action'] == 'clear_contacts') {
            try {
                $stmt = $db->prepare("DELETE FROM contact_messages");
                $stmt->execute();
                $success_message = "All contact messages have been cleared.";
            } catch(PDOException $exception) {
                $error_message = "Error clearing contact messages: " . $exception->getMessage();
            }
        }
        
        // Clear all product enquiries
        if ($_POST['action'] == 'clear_enquiries') {
            try {
                $stmt = $db->prepare("DELETE FROM product_enquiries");
                $stmt->execute();
                $success_message = "All product enquiries have been cleared.";
            } catch(PDOException $exception) {
                $error_message = "Error clearing product enquiries: " . $exception->getMessage();
            }
        }
        
        // Clear old records (older than specified days)
        if ($_POST['action'] == 'clear_old') {
            $days = (int)$_POST['days'];
            if ($days > 0) {
                try {
                    $date_threshold = date('Y-m-d H:i:s', strtotime("-$days days"));
                    
                    $stmt1 = $db->prepare("DELETE FROM contact_messages WHERE submitted_at < ?");
                    $stmt1->execute([$date_threshold]);
                    $contacts_deleted = $stmt1->rowCount();
                    
                    $stmt2 = $db->prepare("DELETE FROM product_enquiries WHERE created_at < ?");
                    $stmt2->execute([$date_threshold]);
                    $enquiries_deleted = $stmt2->rowCount();
                    
                    $success_message = "Deleted $contacts_deleted contact messages and $enquiries_deleted product enquiries older than $days days.";
                } catch(PDOException $exception) {
                    $error_message = "Error clearing old records: " . $exception->getMessage();
                }
            } else {
                $error_message = "Please enter a valid number of days.";
            }
        }
        
        // Backup database
        if ($_POST['action'] == 'backup') {
            try {
                $backup_file = 'backup_' . date('Y-m-d_H-i-s') . '.sql';
                $command = "mysqldump --host=localhost --user=root --password= amul > backups/$backup_file";
                
                // Create backups directory if it doesn't exist
                if (!is_dir('backups')) {
                    mkdir('backups', 0755, true);
                }
                
                $output = [];
                $return_var = 0;
                exec($command, $output, $return_var);
                
                if ($return_var === 0) {
                    $success_message = "Database backup created successfully: $backup_file";
                } else {
                    $error_message = "Backup failed. Please ensure mysqldump is available in your system PATH.";
                }
            } catch(Exception $e) {
                $error_message = "Backup error: " . $e->getMessage();
            }
        }
    }
    // Restore database from uploaded SQL file or from selected backup
    if (isset($_POST['restore_db'])) {
        // Restore from selected backup file
        if (!empty($_POST['restore_filename'])) {
            $restore_file_path = 'backups/' . basename($_POST['restore_filename']);
            if (file_exists($restore_file_path)) {
                $sql_content = file_get_contents($restore_file_path);
                if ($sql_content !== false) {
                    try {
                        $mysqli = new mysqli('localhost', 'root', '', 'amul');
                        if ($mysqli->connect_errno) {
                            $error_message = "MySQL connection failed: " . $mysqli->connect_error;
                        } else {
                            $mysqli->query('SET foreign_key_checks = 0');
                            if ($mysqli->multi_query($sql_content)) {
                                do { while ($mysqli->more_results() && $mysqli->next_result()) {;} } while ($mysqli->more_results());
                                $success_message = "Database restored successfully from backup file.";
                            } else {
                                $error_message = "Restore failed: " . $mysqli->error;
                            }
                            $mysqli->query('SET foreign_key_checks = 1');
                            $mysqli->close();
                        }
                    } catch(Exception $e) {
                        $error_message = "Restore error: " . $e->getMessage();
                    }
                } else {
                    $error_message = "Could not read backup SQL file.";
                }
            } else {
                $error_message = "Backup file not found.";
            }
        }
        // Restore from uploaded file
        elseif (isset($_FILES['restore_file']) && $_FILES['restore_file']['error'] === UPLOAD_ERR_OK) {
            $restore_file = $_FILES['restore_file'];
            if (pathinfo($restore_file['name'], PATHINFO_EXTENSION) === 'sql') {
                $tmp_name = $restore_file['tmp_name'];
                $sql_content = file_get_contents($tmp_name);
                if ($sql_content !== false) {
                    try {
                        $mysqli = new mysqli('localhost', 'root', '', 'amul');
                        if ($mysqli->connect_errno) {
                            $error_message = "MySQL connection failed: " . $mysqli->connect_error;
                        } else {
                            $mysqli->query('SET foreign_key_checks = 0');
                            if ($mysqli->multi_query($sql_content)) {
                                do { while ($mysqli->more_results() && $mysqli->next_result()) {;} } while ($mysqli->more_results());
                                $success_message = "Database restored successfully from uploaded backup.";
                            } else {
                                $error_message = "Restore failed: " . $mysqli->error;
                            }
                            $mysqli->query('SET foreign_key_checks = 1');
                            $mysqli->close();
                        }
                    } catch(Exception $e) {
                        $error_message = "Restore error: " . $e->getMessage();
                    }
                } else {
                    $error_message = "Could not read uploaded SQL file.";
                }
            } else {
                $error_message = "Please upload a valid .sql file.";
            }
        } else {
            $error_message = "Please select a backup file or upload a .sql file.";
        }
    }
}

// Get statistics
try {
    $contact_count = $db->query("SELECT COUNT(*) FROM contact_messages")->fetchColumn();
    $enquiry_count = $db->query("SELECT COUNT(*) FROM product_enquiries")->fetchColumn();
    $user_count = $db->query("SELECT COUNT(*) FROM users")->fetchColumn();
    
    // Get recent activity (last 7 days)
    $recent_contacts = $db->query("SELECT COUNT(*) FROM contact_messages WHERE submitted_at >= DATE_SUB(NOW(), INTERVAL 7 DAY)")->fetchColumn();
    $recent_enquiries = $db->query("SELECT COUNT(*) FROM product_enquiries WHERE created_at >= DATE_SUB(NOW(), INTERVAL 7 DAY)")->fetchColumn();
    
} catch(PDOException $exception) {
    $contact_count = $enquiry_count = $user_count = $recent_contacts = $recent_enquiries = 0;
}

include 'includes/header.php';
?>

<?php if ($error_message): ?>
    <div class="alert alert-danger alert-dismissible fade show">
        <i class="fas fa-exclamation-triangle"></i> <?php echo $error_message; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
<?php endif; ?>

<?php if ($success_message): ?>
    <div class="alert alert-success alert-dismissible fade show">
        <i class="fas fa-check-circle"></i> <?php echo $success_message; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
<?php endif; ?>

<!-- Admin Statistics -->
<div class="row mb-4">
    <div class="col-md-3">
        <div class="card stats-card text-center">
            <div class="card-body">
                <i class="fas fa-envelope fa-2x text-primary mb-2"></i>
                <h4 class="text-primary"><?php echo $contact_count; ?></h4>
                <p class="text-muted mb-0">Total Contacts</p>
                <small class="text-success"><?php echo $recent_contacts; ?> this week</small>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card stats-card text-center">
            <div class="card-body">
                <i class="fas fa-shopping-cart fa-2x text-success mb-2"></i>
                <h4 class="text-success"><?php echo $enquiry_count; ?></h4>
                <p class="text-muted mb-0">Total Enquiries</p>
                <small class="text-success"><?php echo $recent_enquiries; ?> this week</small>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card stats-card text-center">
            <div class="card-body">
                <i class="fas fa-users fa-2x text-info mb-2"></i>
                <h4 class="text-info"><?php echo $user_count; ?></h4>
                <p class="text-muted mb-0">Total Users</p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card stats-card text-center">
            <div class="card-body">
                <i class="fas fa-crown fa-2x text-warning mb-2"></i>
                <h4 class="text-warning">ADMIN</h4>
                <p class="text-muted mb-0">Full Access</p>
                <small class="text-muted">Welcome, <?php echo $_SESSION['username']; ?></small>
            </div>
        </div>
    </div>
</div>

<!-- Admin Tools -->
<div class="row">
    <!-- Bulk Operations -->
    <div class="col-md-6">
        <div class="card table-card">
            <div class="card-header bg-warning text-dark">
                <h5 class="mb-0"><i class="fas fa-tools"></i> Bulk Operations</h5>
            </div>
            <div class="card-body">
                <div class="alert alert-warning">
                    <i class="fas fa-exclamation-triangle"></i> <strong>Warning:</strong> These operations cannot be undone!
                </div>
                
                <div class="d-grid gap-2">
                    <button class="btn btn-outline-danger" onclick="confirmBulkAction('clear_contacts', 'clear all contact messages')">
                        <i class="fas fa-trash"></i> Clear All Contact Messages
                    </button>
                    
                    <button class="btn btn-outline-danger" onclick="confirmBulkAction('clear_enquiries', 'clear all product enquiries')">
                        <i class="fas fa-trash"></i> Clear All Product Enquiries
                    </button>
                    
                    <hr>
                    
                    <div class="row g-2">
                        <div class="col-8">
                            <input type="number" id="daysInput" class="form-control" placeholder="Days" min="1" value="30">
                        </div>
                        <div class="col-4">
                            <button class="btn btn-outline-warning w-100" onclick="clearOldRecords()">
                                <i class="fas fa-calendar"></i> Clear Old
                            </button>
                        </div>
                    </div>
                    <small class="text-muted">Delete records older than specified days</small>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Database Tools -->
    <div class="col-md-6">
        <div class="card table-card">
            <div class="card-header bg-info text-white">
                <h5 class="mb-0"><i class="fas fa-database"></i> Database Tools</h5>
            </div>
            <div class="card-body">
                <div class="d-grid gap-2">
                    <button class="btn btn-outline-primary" onclick="createBackup()">
                        <i class="fas fa-download"></i> Create Database Backup
                    </button>
                    <!-- Restore Form -->
                    <form id="restoreForm" method="POST" enctype="multipart/form-data" class="mt-3 p-3 border rounded bg-light shadow-sm">
                        <label for="restoreFile" class="form-label fw-bold mb-2"><i class="fas fa-upload"></i> Restore Database from Backup</label>
                        <input type="file" class="form-control mb-2" id="restoreFile" name="restore_file" accept=".sql">
                        <input type="hidden" id="restoreFilename" name="restore_filename">
                        <button type="submit" name="restore_db" class="btn btn-outline-danger w-100 mt-2">
                            <i class="fas fa-database"></i> Restore Database
                        </button>
                        <div class="form-text text-danger mt-2">
                            <i class="fas fa-exclamation-triangle"></i> This will overwrite all current data!
                        </div>
                    </form>
                    <hr>
                    <a href="contact_messages.php" class="btn btn-outline-success">
                        <i class="fas fa-envelope"></i> Manage Contact Messages
                    </a>
                    <a href="product_enquiries.php" class="btn btn-outline-success">
                        <i class="fas fa-shopping-cart"></i> Manage Product Enquiries
                    </a>
                    <a href="user_management.php" class="btn btn-outline-primary">
                        <i class="fas fa-users-cog"></i> Manage Users
                    </a>
                </div>
                
                <?php if (is_dir('backups')): ?>
                    <hr>
                    <h6>Recent Backups:</h6>
                    <div class="small">
                        <?php
                        $backups = glob('backups/*.sql');
                        $backups = array_slice(array_reverse($backups), 0, 3);
                        foreach ($backups as $backup):
                        ?>
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <span><?php echo basename($backup); ?></span>
                                <div>
                                    <small class="text-muted me-2"><?php echo date('M d, H:i', filemtime($backup)); ?></small>
                                    <button class="btn btn-sm btn-outline-danger" onclick="restoreFromBackup('<?php echo basename($backup); ?>')">
                                        <i class="fas fa-upload"></i> Restore
                                    </button>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <?php if (empty($backups)): ?>
                            <span class="text-muted">No backups found</span>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<!-- Hidden Form for Bulk Actions -->
<form id="bulkActionForm" method="POST" style="display: none;">
    <input type="hidden" id="actionInput" name="action">
    <input type="hidden" id="daysHidden" name="days">
</form>

<!-- Confirmation Modal -->
<div class="modal fade" id="confirmModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title">
                    <i class="fas fa-exclamation-triangle"></i> Admin Confirmation Required
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger">
                    <i class="fas fa-crown"></i> <strong>Admin Action:</strong> This is a destructive operation.
                </div>
                <p>Are you sure you want to <strong id="actionDescription"></strong>?</p>
                <p class="text-danger">
                    <i class="fas fa-exclamation-triangle"></i> This action cannot be undone!
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" onclick="executeBulkAction()">
                    <i class="fas fa-check"></i> Yes, Proceed
                </button>
            </div>
        </div>
    </div>
</div>

<script>
let currentAction = '';

function confirmBulkAction(action, description) {
    currentAction = action;
    document.getElementById('actionDescription').textContent = description;
    
    var confirmModal = new bootstrap.Modal(document.getElementById('confirmModal'));
    confirmModal.show();
}

function clearOldRecords() {
    const days = document.getElementById('daysInput').value;
    if (!days || days < 1) {
        alert('Please enter a valid number of days');
        return;
    }
    
    currentAction = 'clear_old';
    document.getElementById('actionDescription').textContent = `delete all records older than ${days} days`;
    document.getElementById('daysHidden').value = days;
    
    var confirmModal = new bootstrap.Modal(document.getElementById('confirmModal'));
    confirmModal.show();
}

function createBackup() {
    if (confirm('Create a database backup? This may take a moment.')) {
        currentAction = 'backup';
        executeBulkAction();
    }
}

function executeBulkAction() {
    document.getElementById('actionInput').value = currentAction;
    document.getElementById('bulkActionForm').submit();
}

function restoreFromBackup(filename) {
    if (confirm('Restore database from backup "' + filename + '"? This will overwrite all current data!')) {
        document.getElementById('restoreFilename').value = filename;
        document.getElementById('restoreFile').value = ''; // clear file input if any
        document.getElementById('restoreForm').submit();
    }
}
</script>

<style>
/* Add some style for the restore form */
#restoreForm {
    background: #f8f9fa;
    border: 1px solid #e3e6f0;
    border-radius: 8px;
}
#restoreForm label {
    color: #0d6efd;
}
#restoreForm .btn-outline-danger {
    font-weight: bold;
}
#restoreForm .form-text {
    font-size: 0.95em;
}
</style>

<?php include 'includes/footer.php'; ?>
