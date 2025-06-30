<?php
require_once 'includes/session.php';
require_once 'config/database.php';

checkLogin();

$page_title = "Dashboard";
$page_subtitle = "Overview of all activities";

// Get database connection
$database = new Database();
$db = $database->getConnection();

// Get counts
try {
    $contact_query = "SELECT COUNT(*) as count FROM contact_messages";
    $contact_stmt = $db->prepare($contact_query);
    $contact_stmt->execute();
    $contact_count = $contact_stmt->fetch(PDO::FETCH_ASSOC)['count'];

    $enquiry_query = "SELECT COUNT(*) as count FROM product_enquiries";
    $enquiry_stmt = $db->prepare($enquiry_query);
    $enquiry_stmt->execute();
    $enquiry_count = $enquiry_stmt->fetch(PDO::FETCH_ASSOC)['count'];

    // Get recent contact messages
    $recent_contacts_query = "SELECT * FROM contact_messages ORDER BY submitted_at DESC LIMIT 5";
    $recent_contacts_stmt = $db->prepare($recent_contacts_query);
    $recent_contacts_stmt->execute();
    $recent_contacts = $recent_contacts_stmt->fetchAll(PDO::FETCH_ASSOC);

    // Get recent product enquiries
    $recent_enquiries_query = "SELECT * FROM product_enquiries ORDER BY created_at DESC LIMIT 5";
    $recent_enquiries_stmt = $db->prepare($recent_enquiries_query);
    $recent_enquiries_stmt->execute();
    $recent_enquiries = $recent_enquiries_stmt->fetchAll(PDO::FETCH_ASSOC);

} catch(PDOException $exception) {
    $contact_count = 0;
    $enquiry_count = 0;
    $recent_contacts = [];
    $recent_enquiries = [];
}

include 'includes/header.php';
?>

<!-- Stats Cards -->
<div class="row mb-4">
    <div class="col-md-4">
        <div class="card stats-card h-100">
            <div class="card-body text-center">
                <div class="row align-items-center">
                    <div class="col">
                        <i class="fas fa-envelope fa-3x text-primary mb-3"></i>
                        <h3 class="text-primary"><?php echo $contact_count; ?></h3>
                        <p class="text-muted mb-2">Contact Messages</p>
                        <?php if (isAdmin()): ?>
                            <a href="contact_messages.php" class="btn btn-primary btn-sm">
                                <i class="fas fa-cog"></i> Manage
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card stats-card h-100">
            <div class="card-body text-center">
                <div class="row align-items-center">
                    <div class="col">
                        <i class="fas fa-shopping-cart fa-3x text-success mb-3"></i>
                        <h3 class="text-success"><?php echo $enquiry_count; ?></h3>
                        <p class="text-muted mb-2">Product Enquiries</p>
                        <?php if (isAdmin()): ?>
                            <a href="product_enquiries.php" class="btn btn-success btn-sm">
                                <i class="fas fa-cog"></i> Manage
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card stats-card h-100">
            <div class="card-body text-center">
                <div class="row align-items-center">
                    <div class="col">
                        <?php if (isAdmin()): ?>
                            <i class="fas fa-crown fa-3x text-warning mb-3"></i>
                            <h3 class="text-warning">ADMIN</h3>
                            <p class="text-muted mb-2">Full Privileges</p>
                            <a href="admin_tools.php" class="btn btn-warning btn-sm">
                                <i class="fas fa-tools"></i> Admin Tools
                            </a>
                        <?php else: ?>
                            <i class="fas fa-eye fa-3x text-info mb-3"></i>
                            <h3 class="text-info">GUEST</h3>
                            <p class="text-muted mb-2">View Only Access</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Recent Activity -->
<div class="row">
    <div class="col-md-6">
        <div class="card table-card">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0"><i class="fas fa-envelope"></i> Recent Contact Messages</h5>
            </div>
            <div class="card-body">
                <?php if (count($recent_contacts) > 0): ?>
                    <div class="table-responsive">
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Subject</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($recent_contacts as $contact): ?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($contact['name']); ?></td>
                                        <td><?php echo htmlspecialchars(substr($contact['subject'], 0, 30)) . (strlen($contact['subject']) > 30 ? '...' : ''); ?></td>
                                        <td><?php echo date('M d, Y', strtotime($contact['submitted_at'])); ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="text-center">
                        <a href="contact_messages.php" class="btn btn-primary btn-sm">View All Messages</a>
                    </div>
                <?php else: ?>
                    <p class="text-muted text-center">No contact messages found.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="card table-card">
            <div class="card-header bg-success text-white">
                <h5 class="mb-0"><i class="fas fa-shopping-cart"></i> Recent Product Enquiries</h5>
            </div>
            <div class="card-body">
                <?php if (count($recent_enquiries) > 0): ?>
                    <div class="table-responsive">
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Product</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($recent_enquiries as $enquiry): ?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($enquiry['name']); ?></td>
                                        <td><?php echo htmlspecialchars($enquiry['product_category']); ?></td>
                                        <td><?php echo date('M d, Y', strtotime($enquiry['created_at'])); ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="text-center">
                        <a href="product_enquiries.php" class="btn btn-success btn-sm">View All Enquiries</a>
                    </div>
                <?php else: ?>
                    <p class="text-muted text-center">No product enquiries found.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
