<?php
require_once 'includes/session.php';
require_once 'config/database.php';

checkLogin();

$page_title = "Product Enquiries";
$page_subtitle = "View all product enquiry submissions";

// Get database connection
$database = new Database();
$db = $database->getConnection();

// Add deleted_at column if not exists (run once)
$db->exec("ALTER TABLE product_enquiries ADD COLUMN IF NOT EXISTS deleted_at DATETIME DEFAULT NULL");

// Trash view toggle
$show_trash = isset($_GET['trash']) && $_GET['trash'] == '1';

// Fetch product enquiries (normal or trashed)
try {
    if ($show_trash) {
        $query = "SELECT * FROM product_enquiries WHERE deleted_at IS NOT NULL ORDER BY created_at DESC";
    } else {
        $query = "SELECT * FROM product_enquiries WHERE deleted_at IS NULL ORDER BY created_at DESC";
    }
    $stmt = $db->prepare($query);
    $stmt->execute();
    $product_enquiries = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch(PDOException $exception) {
    $product_enquiries = [];
    $error_message = "Error fetching product enquiries: " . $exception->getMessage();
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
        <a href="product_enquiries.php" class="btn btn-outline-primary btn-sm">
            <i class="fas fa-inbox"></i> Show Inbox
        </a>
    <?php else: ?>
        <a href="product_enquiries.php?trash=1" class="btn btn-outline-danger btn-sm">
            <i class="fas fa-trash"></i> Show Trash
        </a>
    <?php endif; ?>
</div>

<div class="card table-card">
    <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
        <h5 class="mb-0"><i class="fas fa-shopping-cart"></i> Product Enquiries</h5>
        <div>
            <?php if (isAdmin()): ?>
                <a href="export.php?table=product_enquiries" class="btn btn-light btn-sm me-2">
                    <i class="fas fa-download"></i> Export CSV
                </a>
            <?php endif; ?>
            <span class="badge bg-light text-dark"><?php echo count($product_enquiries); ?> Total</span>
        </div>
    </div>
    <div class="card-body">
        <?php if (count($product_enquiries) > 0): ?>
            <div class="table-responsive">
                <table class="table table-striped table-hover data-table">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Contact Pref</th>
                            <th>Category</th>
                            <th>Product</th>
                            <th>Enquiry Type</th>
                            <th>Urgency</th>
                            <th>Message</th>
                            <th>Consent</th>
                            <th>Created At</th>
                            <?php if (isAdmin()): ?>
                                <th>Actions</th>
                            <?php endif; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($product_enquiries as $enquiry): ?>
                            <tr <?php if ($show_trash): ?>class="table-danger"<?php endif; ?>>
                                <td><?php echo $enquiry['id']; ?></td>
                                <td>
                                    <strong><?php echo htmlspecialchars($enquiry['name']); ?></strong>
                                </td>
                                <td>
                                    <a href="tel:<?php echo $enquiry['phone']; ?>" class="text-decoration-none">
                                        <i class="fas fa-phone"></i> <?php echo htmlspecialchars($enquiry['phone']); ?>
                                    </a>
                                </td>
                                <td>
                                    <?php if ($enquiry['email']): ?>
                                        <a href="mailto:<?php echo $enquiry['email']; ?>" class="text-decoration-none">
                                            <i class="fas fa-envelope"></i> <?php echo htmlspecialchars($enquiry['email']); ?>
                                        </a>
                                    <?php else: ?>
                                        <span class="text-muted">Not provided</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <span class="badge bg-info text-dark">
                                        <?php echo ucfirst(htmlspecialchars($enquiry['preferred_contact'])); ?>
                                    </span>
                                </td>
                                <td>
                                    <span class="badge bg-primary">
                                        <?php echo htmlspecialchars($enquiry['product_category']); ?>
                                    </span>
                                </td>
                                <td>
                                    <?php if ($enquiry['product_name']): ?>
                                        <?php echo htmlspecialchars($enquiry['product_name']); ?>
                                    <?php else: ?>
                                        <span class="text-muted">Not specified</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <span class="badge bg-warning text-dark">
                                        <?php echo ucfirst(htmlspecialchars($enquiry['enquiry_type'])); ?>
                                    </span>
                                </td>
                                <td>
                                    <?php
                                    $urgency_class = '';
                                    switch($enquiry['urgency']) {
                                        case 'high':
                                            $urgency_class = 'bg-danger';
                                            break;
                                        case 'medium':
                                            $urgency_class = 'bg-warning text-dark';
                                            break;
                                        default:
                                            $urgency_class = 'bg-success';
                                    }
                                    ?>
                                    <span class="badge <?php echo $urgency_class; ?>">
                                        <?php echo ucfirst(htmlspecialchars($enquiry['urgency'])); ?>
                                    </span>
                                </td>
                                <td>
                                    <div style="max-width: 200px;">
                                        <?php 
                                        $message_text = htmlspecialchars($enquiry['message']);
                                        echo strlen($message_text) > 100 ? substr($message_text, 0, 100) . '...' : $message_text;
                                        ?>
                                        <?php if (strlen($enquiry['message']) > 100): ?>
                                            <button class="btn btn-link btn-sm p-0" 
                                                    data-bs-toggle="modal" 
                                                    data-bs-target="#enquiryModal<?php echo $enquiry['id']; ?>">
                                                Read More
                                            </button>
                                        <?php endif; ?>
                                    </div>
                                </td>
                                <td>
                                    <?php if ($enquiry['consent']): ?>
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
                                        <?php echo date('M d, Y', strtotime($enquiry['created_at'])); ?><br>
                                        <span class="text-muted"><?php echo date('H:i:s', strtotime($enquiry['created_at'])); ?></span>
                                    </small>
                                </td>
                                <?php if (isAdmin()): ?>
                                    <td>
                                        <?php if (!$show_trash): ?>
                                            <button class="btn btn-warning btn-sm me-1" 
                                                onclick="softDeleteRecord('product_enquiries', <?php echo $enquiry['id']; ?>, 'enquiry from <?php echo htmlspecialchars($enquiry['name']); ?>')">
                                                <i class="fas fa-trash"></i> Delete
                                            </button>
                                        <?php else: ?>
                                            <button class="btn btn-success btn-sm me-1"
                                                onclick="restoreRecord('product_enquiries', <?php echo $enquiry['id']; ?>, 'enquiry from <?php echo htmlspecialchars($enquiry['name']); ?>')">
                                                <i class="fas fa-undo"></i> Restore
                                            </button>
                                            <button class="btn btn-danger btn-sm"
                                                onclick="permanentDeleteRecord('product_enquiries', <?php echo $enquiry['id']; ?>, 'enquiry from <?php echo htmlspecialchars($enquiry['name']); ?>')">
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
                <i class="fas fa-shopping-cart fa-3x text-muted mb-3"></i>
                <h5 class="text-muted">No product enquiries found</h5>
                <p class="text-muted">Product enquiries will appear here when submitted through the website.</p>
            </div>
        <?php endif; ?>
    </div>
</div>

<!-- Enquiry Modals -->
<?php foreach ($product_enquiries as $enquiry): ?>
    <?php if (strlen($enquiry['message']) > 100): ?>
        <div class="modal fade" id="enquiryModal<?php echo $enquiry['id']; ?>" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            Enquiry from <?php echo htmlspecialchars($enquiry['name']); ?>
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <p><strong>Product Category:</strong> <?php echo htmlspecialchars($enquiry['product_category']); ?></p>
                                <p><strong>Product Name:</strong> <?php echo htmlspecialchars($enquiry['product_name'] ?: 'Not specified'); ?></p>
                                <p><strong>Enquiry Type:</strong> <?php echo ucfirst(htmlspecialchars($enquiry['enquiry_type'])); ?></p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Urgency:</strong> <?php echo ucfirst(htmlspecialchars($enquiry['urgency'])); ?></p>
                                <p><strong>Preferred Contact:</strong> <?php echo ucfirst(htmlspecialchars($enquiry['preferred_contact'])); ?></p>
                            </div>
                        </div>
                        <p><strong>Message:</strong></p>
                        <div class="border p-3 bg-light rounded">
                            <?php echo nl2br(htmlspecialchars($enquiry['message'])); ?>
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

<!-- Add modals and scripts for delete/restore -->
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
