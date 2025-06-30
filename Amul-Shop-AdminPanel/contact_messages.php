<?php
require_once 'includes/session.php';
require_once 'config/database.php';

checkLogin();

$page_title = "Contact Messages";
$page_subtitle = "View all contact form submissions";

// Get database connection
$database = new Database();
$db = $database->getConnection();

// Add deleted_at column if not exists (run once)
$db->exec("ALTER TABLE contact_messages ADD COLUMN IF NOT EXISTS deleted_at DATETIME DEFAULT NULL");

// Trash view toggle
$show_trash = isset($_GET['trash']) && $_GET['trash'] == '1';

// Fetch contact messages (normal or trashed)
try {
    if ($show_trash) {
        $query = "SELECT * FROM contact_messages WHERE deleted_at IS NOT NULL ORDER BY submitted_at DESC";
    } else {
        $query = "SELECT * FROM contact_messages WHERE deleted_at IS NULL ORDER BY submitted_at DESC";
    }
    $stmt = $db->prepare($query);
    $stmt->execute();
    $contact_messages = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch(PDOException $exception) {
    $contact_messages = [];
    $error_message = "Error fetching contact messages: " . $exception->getMessage();
}

include 'includes/header.php';
?>

<?php if (isset($error_message)): ?>
    <div class="alert alert-danger">
        <i class="fas fa-exclamation-triangle"></i> <?php echo $error_message; ?>
    </div>
<?php endif; ?>

<!-- Trash/Inbox Toggle -->
<div class="mb-3">
    <?php if ($show_trash): ?>
        <a href="contact_messages.php" class="btn btn-outline-primary btn-sm">
            <i class="fas fa-inbox"></i> Show Inbox
        </a>
    <?php else: ?>
        <a href="contact_messages.php?trash=1" class="btn btn-outline-danger btn-sm">
            <i class="fas fa-trash"></i> Show Trash
        </a>
    <?php endif; ?>
</div>

<div class="card table-card">
    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
        <h5 class="mb-0"><i class="fas fa-envelope"></i> Contact Messages</h5>
        <div>
            <?php if (isAdmin()): ?>
                <a href="export.php?table=contact_messages" class="btn btn-light btn-sm me-2">
                    <i class="fas fa-download"></i> Export CSV
                </a>
            <?php endif; ?>
            <span class="badge bg-light text-dark"><?php echo count($contact_messages); ?> Total</span>
        </div>
    </div>
    <div class="card-body">
        <?php if (count($contact_messages) > 0): ?>
            <div class="table-responsive">
                <table class="table table-striped table-hover data-table">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Consent</th>
                            <th>Submitted At</th>
                            <?php if (isAdmin()): ?>
                                <th>Actions</th>
                            <?php endif; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($contact_messages as $message): ?>
                            <tr <?php if ($show_trash): ?>class="table-danger"<?php endif; ?>>
                                <td><?php echo $message['id']; ?></td>
                                <td>
                                    <strong><?php echo htmlspecialchars($message['name']); ?></strong>
                                </td>
                                <td>
                                    <a href="tel:<?php echo $message['phone']; ?>" class="text-decoration-none">
                                        <i class="fas fa-phone"></i> <?php echo htmlspecialchars($message['phone']); ?>
                                    </a>
                                </td>
                                <td>
                                    <?php if ($message['email']): ?>
                                        <a href="mailto:<?php echo $message['email']; ?>" class="text-decoration-none">
                                            <i class="fas fa-envelope"></i> <?php echo htmlspecialchars($message['email']); ?>
                                        </a>
                                    <?php else: ?>
                                        <span class="text-muted">Not provided</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <span class="badge bg-info text-dark">
                                        <?php echo htmlspecialchars($message['subject']); ?>
                                    </span>
                                </td>
                                <td>
                                    <div style="max-width: 200px;">
                                        <?php 
                                        $message_text = htmlspecialchars($message['message']);
                                        echo strlen($message_text) > 100 ? substr($message_text, 0, 100) . '...' : $message_text;
                                        ?>
                                        <?php if (strlen($message['message']) > 100): ?>
                                            <button class="btn btn-link btn-sm p-0" 
                                                    data-bs-toggle="modal" 
                                                    data-bs-target="#messageModal<?php echo $message['id']; ?>">
                                                Read More
                                            </button>
                                        <?php endif; ?>
                                    </div>
                                </td>
                                <td>
                                    <?php if ($message['consent']): ?>
                                        <span class="badge bg-success">
                                            <i class="fas fa-check"></i> Yes
                                        </span>
                                    <?php else: ?>
                                        <span class="badge bg-danger">
                                            <i class="fas fa-times"></i> No
                                        </span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <small>
                                        <?php echo date('M d, Y', strtotime($message['submitted_at'])); ?><br>
                                        <span class="text-muted"><?php echo date('H:i:s', strtotime($message['submitted_at'])); ?></span>
                                    </small>
                                </td>
                                <?php if (isAdmin()): ?>
                                    <td>
                                        <?php if (!$show_trash): ?>
                                            <button class="btn btn-warning btn-sm me-1" 
                                                onclick="softDeleteRecord('contact_messages', <?php echo $message['id']; ?>, 'contact message from <?php echo htmlspecialchars($message['name']); ?>')">
                                                <i class="fas fa-trash"></i> Delete
                                            </button>
                                        <?php else: ?>
                                            <button class="btn btn-success btn-sm me-1"
                                                onclick="restoreRecord('contact_messages', <?php echo $message['id']; ?>, 'contact message from <?php echo htmlspecialchars($message['name']); ?>')">
                                                <i class="fas fa-undo"></i> Restore
                                            </button>
                                            <button class="btn btn-danger btn-sm"
                                                onclick="permanentDeleteRecord('contact_messages', <?php echo $message['id']; ?>, 'contact message from <?php echo htmlspecialchars($message['name']); ?>')">
                                                <i class="fas fa-trash-alt"></i> Permanently Delete
                                            </button>
                                        <?php endif; ?>
                                    </td>
                                <?php endif; ?>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php else: ?>
            <div class="text-center py-5">
                <i class="fas fa-inbox fa-3x text-muted mb-3"></i>
                <h5 class="text-muted">No contact messages found</h5>
                <p class="text-muted">Contact messages will appear here when submitted through the website.</p>
            </div>
        <?php endif; ?>
    </div>
</div>

<!-- Message Modals -->
<?php foreach ($contact_messages as $message): ?>
    <?php if (strlen($message['message']) > 100): ?>
        <div class="modal fade" id="messageModal<?php echo $message['id']; ?>" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            Message from <?php echo htmlspecialchars($message['name']); ?>
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <p><strong>Subject:</strong> <?php echo htmlspecialchars($message['subject']); ?></p>
                        <p><strong>Message:</strong></p>
                        <div class="border p-3 bg-light rounded">
                            <?php echo nl2br(htmlspecialchars($message['message'])); ?>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php endforeach; ?>

<?php if (isAdmin()): ?>
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
