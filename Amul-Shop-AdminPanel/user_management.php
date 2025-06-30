<?php
require_once 'includes/session.php';
require_once 'config/database.php';

checkLogin();

// Only allow admin 'om' to access this page
if ($_SESSION['username'] !== 'om') {
    header('Location: dashboard.php');
    exit();
}

$page_title = "User Management";
$page_subtitle = "Create and manage admin panel users";

// Get database connection
$database = new Database();
$db = $database->getConnection();

// Create users table if it doesn't exist
try {
    $create_table_query = "CREATE TABLE IF NOT EXISTS users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50) UNIQUE NOT NULL,
        password VARCHAR(255) NOT NULL,
        role ENUM('admin', 'guest') NOT NULL DEFAULT 'guest',
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        created_by VARCHAR(50) NOT NULL
    )";
    $db->exec($create_table_query);

    // Insert default users if they don't exist
    $check_om = $db->prepare("SELECT COUNT(*) FROM users WHERE username = 'om'");
    $check_om->execute();
    if ($check_om->fetchColumn() == 0) {
        $insert_om = $db->prepare("INSERT INTO users (username, password, role, created_by) VALUES ('om', ?, 'admin', 'system')");
        $insert_om->execute([password_hash('om27031980', PASSWORD_DEFAULT)]);
    }

    $check_guest = $db->prepare("SELECT COUNT(*) FROM users WHERE username = 'guest'");
    $check_guest->execute();
    if ($check_guest->fetchColumn() == 0) {
        $insert_guest = $db->prepare("INSERT INTO users (username, password, role, created_by) VALUES ('guest', ?, 'guest', 'system')");
        $insert_guest->execute([password_hash('1234', PASSWORD_DEFAULT)]);
    }

} catch(PDOException $exception) {
    $error_message = "Error setting up users table: " . $exception->getMessage();
}

// Add deleted_at column if not exists (run once)
$db->exec("ALTER TABLE users ADD COLUMN IF NOT EXISTS deleted_at DATETIME DEFAULT NULL");

// Trash view toggle
$show_trash = isset($_GET['trash']) && $_GET['trash'] == '1';

// Fetch all users (normal or trashed)
try {
    if ($show_trash) {
        $query = "SELECT * FROM users WHERE deleted_at IS NOT NULL ORDER BY created_at DESC";
    } else {
        $query = "SELECT * FROM users WHERE deleted_at IS NULL ORDER BY created_at DESC";
    }
    $stmt = $db->prepare($query);
    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch(PDOException $exception) {
    $users = [];
    $error_message = "Error fetching users: " . $exception->getMessage();
}

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['action'])) {
        
        // Create user
        if ($_POST['action'] == 'create') {
            $username = trim($_POST['username']);
            $password = $_POST['password'];
            $role = $_POST['role'];
            
            if (!empty($username) && !empty($password)) {
                try {
                    $stmt = $db->prepare("INSERT INTO users (username, password, role, created_by) VALUES (?, ?, ?, ?)");
                    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                    $stmt->execute([$username, $hashed_password, $role, $_SESSION['username']]);
                    $success_message = "User '$username' created successfully!";
                } catch(PDOException $exception) {
                    if ($exception->getCode() == 23000) {
                        $error_message = "Username '$username' already exists!";
                    } else {
                        $error_message = "Error creating user: " . $exception->getMessage();
                    }
                }
            } else {
                $error_message = "Username and password are required!";
            }
        }
        
        // Delete user
        if ($_POST['action'] == 'delete') {
            $user_id = $_POST['user_id'];
            $username = $_POST['username'];
            
            // Prevent deletion of 'om' user
            if ($username === 'om') {
                $error_message = "Cannot delete the main admin user 'om'!";
            } else {
                try {
                    $stmt = $db->prepare("DELETE FROM users WHERE id = ? AND username != 'om'");
                    $stmt->execute([$user_id]);
                    $success_message = "User '$username' deleted successfully!";
                } catch(PDOException $exception) {
                    $error_message = "Error deleting user: " . $exception->getMessage();
                }
            }
        }
    }
}

include 'includes/header.php';
?>

<?php if (isset($error_message)): ?>
    <div class="alert alert-danger alert-dismissible fade show">
        <i class="fas fa-exclamation-triangle"></i> <?php echo $error_message; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
<?php endif; ?>

<?php if (isset($success_message)): ?>
    <div class="alert alert-success alert-dismissible fade show">
        <i class="fas fa-check-circle"></i> <?php echo $success_message; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
<?php endif; ?>

<!-- Create User Form -->
<div class="row mb-4">
    <div class="col-md-6">
        <div class="card table-card">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0"><i class="fas fa-user-plus"></i> Create New User</h5>
            </div>
            <div class="card-body">
                <form method="POST">
                    <input type="hidden" name="action" value="create">
                    
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                        <div class="form-text">Username must be unique and contain no spaces.</div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                        <div class="form-text">Password will be securely hashed.</div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="role" class="form-label">Role</label>
                        <select class="form-select" id="role" name="role" required>
                            <option value="guest">Guest (View Only)</option>
                            <option value="admin">Admin (Full Access)</option>
                        </select>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-user-plus"></i> Create User
                    </button>
                </form>
            </div>
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="card stats-card h-100">
            <div class="card-body">
                <div class="text-center">
                    <i class="fas fa-users fa-3x text-primary mb-3"></i>
                    <h3 class="text-primary"><?php echo count($users); ?></h3>
                    <p class="text-muted mb-3">Total Users</p>
                    
                    <div class="row text-center">
                        <div class="col-6">
                            <h5 class="text-success">
                                <?php echo count(array_filter($users, function($u) { return $u['role'] == 'admin'; })); ?>
                            </h5>
                            <small class="text-muted">Admins</small>
                        </div>
                        <div class="col-6">
                            <h5 class="text-info">
                                <?php echo count(array_filter($users, function($u) { return $u['role'] == 'guest'; })); ?>
                            </h5>
                            <small class="text-muted">Guests</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Trash/Inbox Toggle -->
<div class="mb-3">
    <?php if ($show_trash): ?>
        <a href="user_management.php" class="btn btn-outline-primary btn-sm">
            <i class="fas fa-users"></i> Show Active Users
        </a>
    <?php else: ?>
        <a href="user_management.php?trash=1" class="btn btn-outline-danger btn-sm">
            <i class="fas fa-trash"></i> Show Trash
        </a>
    <?php endif; ?>
</div>

<!-- Users Table -->
<div class="card table-card">
    <div class="card-header bg-secondary text-white d-flex justify-content-between align-items-center">
        <h5 class="mb-0"><i class="fas fa-users"></i> Existing Users</h5>
        <span class="badge bg-light text-dark"><?php echo count($users); ?> Users</span>
    </div>
    <div class="card-body">
        <?php if (count($users) > 0): ?>
            <div class="table-responsive">
                <table class="table table-striped table-hover data-table">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Role</th>
                            <th>Created At</th>
                            <th>Created By</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $user): ?>
                            <tr <?php if ($show_trash): ?>class="table-danger"<?php endif; ?>>
                                <td><?php echo $user['id']; ?></td>
                                <td>
                                    <strong><?php echo htmlspecialchars($user['username']); ?></strong>
                                    <?php if ($user['username'] === $_SESSION['username']): ?>
                                        <span class="badge bg-warning text-dark ms-1">You</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if ($user['role'] === 'admin'): ?>
                                        <span class="badge bg-danger">
                                            <i class="fas fa-crown"></i> Admin
                                        </span>
                                    <?php else: ?>
                                        <span class="badge bg-info">
                                            <i class="fas fa-eye"></i> Guest
                                        </span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <small>
                                        <?php echo date('M d, Y', strtotime($user['created_at'])); ?><br>
                                        <span class="text-muted"><?php echo date('H:i:s', strtotime($user['created_at'])); ?></span>
                                    </small>
                                </td>
                                <td>
                                    <span class="badge bg-secondary">
                                        <?php echo htmlspecialchars($user['created_by']); ?>
                                    </span>
                                </td>
                                <td>
                                    <?php if ($user['username'] !== 'om'): ?>
                                        <?php if (!$show_trash): ?>
                                            <button class="btn btn-warning btn-sm me-1" 
                                                onclick="softDeleteRecord('users', <?php echo $user['id']; ?>, '<?php echo htmlspecialchars($user['username']); ?>')">
                                                <i class="fas fa-trash"></i> Delete
                                            </button>
                                        <?php else: ?>
                                            <button class="btn btn-success btn-sm me-1"
                                                onclick="restoreRecord('users', <?php echo $user['id']; ?>, '<?php echo htmlspecialchars($user['username']); ?>')">
                                                <i class="fas fa-undo"></i> Restore
                                            </button>
                                            <button class="btn btn-danger btn-sm"
                                                onclick="permanentDeleteRecord('users', <?php echo $user['id']; ?>, '<?php echo htmlspecialchars($user['username']); ?>')">
                                                <i class="fas fa-trash-alt"></i> Permanently Delete
                                            </button>
                                        <?php endif; ?>
                                    <?php else: ?>
                                        <span class="badge bg-success">
                                            <i class="fas fa-shield-alt"></i> Protected
                                        </span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php else: ?>
            <div class="text-center py-5">
                <i class="fas fa-users fa-3x text-muted mb-3"></i>
                <h5 class="text-muted">No users found</h5>
                <p class="text-muted">Create your first user using the form above.</p>
            </div>
        <?php endif; ?>
    </div>
</div>

<!-- Add modals and scripts for delete/restore -->
<?php if ($_SESSION['username'] === 'om'): ?>
<script>
let deleteTable = '', deleteId = '', deleteAction = '', deleteItemName = '';

function softDeleteRecord(table, id, itemName) {
    if (confirm(`Move ${itemName} to trash?`)) {
        sendAction('soft_delete', table, id, itemName);
    }
}
function restoreRecord(table, id, itemName) {
    if (confirm(`Restore ${itemName}?`)) {
        sendAction('restore', table, id, itemName);
    }
}
function permanentDeleteRecord(table, id, itemName) {
    if (confirm(`Permanently delete ${itemName}? This cannot be undone!`)) {
        sendAction('delete', table, id, itemName);
    }
}
function sendAction(action, table, id, itemName) {
    fetch('admin_actions.php', {
        method: 'POST',
        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
        body: `action=${action}&table=${table}&id=${id}`
    })
    .then(response => response.json())
    .then(data => {
        alert(data.message);
        window.location.reload();
    })
    .catch(error => alert('Error: ' + error.message));
}
</script>
<?php endif; ?>

<?php include 'includes/footer.php'; ?>
