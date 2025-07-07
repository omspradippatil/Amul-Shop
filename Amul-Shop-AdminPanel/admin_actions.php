<?php
require_once 'includes/session.php';
require_once 'config/database.php';

checkLogin();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action'])) {
    header('Content-Type: application/json');
    if (!isAdmin()) {
        echo json_encode(['success' => false, 'message' => 'Access denied. Admin privileges required.']);
        exit();
    }

    $table = $_POST['table'] ?? '';
    $id = $_POST['id'] ?? '';
    $allowed_tables = ['contact_messages', 'product_enquiries', 'users'];
    if (!in_array($table, $allowed_tables)) {
        echo json_encode(['success' => false, 'message' => 'Invalid table specified.']);
        exit();
    }

    $database = new Database();
    $db = $database->getConnection();

    // Prevent deletion of main admin user
    if ($table == 'users') {
        $check_stmt = $db->prepare("SELECT username FROM users WHERE id = ?");
        $check_stmt->execute([$id]);
        $user = $check_stmt->fetch(PDO::FETCH_ASSOC);
        if ($user && $user['username'] === 'om') {
            echo json_encode(['success' => false, 'message' => 'Cannot delete the main admin user.']);
            exit();
        }
    }

    try {
        if ($_POST['action'] == 'soft_delete') {
            // Soft delete: set deleted_at
            $stmt = $db->prepare("UPDATE $table SET deleted_at = NOW() WHERE id = ?");
            $result = $stmt->execute([$id]);
            echo json_encode(['success' => $result, 'message' => $result ? 'Record moved to trash.' : 'Failed to delete record.']);
        } elseif ($_POST['action'] == 'restore') {
            // Restore: set deleted_at to NULL
            $stmt = $db->prepare("UPDATE $table SET deleted_at = NULL WHERE id = ?");
            $result = $stmt->execute([$id]);
            echo json_encode(['success' => $result, 'message' => $result ? 'Record restored.' : 'Failed to restore record.']);
        } elseif ($_POST['action'] == 'delete') {
            // Permanent delete
            $stmt = $db->prepare("DELETE FROM $table WHERE id = ?");
            $result = $stmt->execute([$id]);
            echo json_encode(['success' => $result, 'message' => $result ? 'Record permanently deleted.' : 'Failed to delete record.']);
        } elseif ($_POST['action'] == 'mark_replied') {
            // Mark as replied: set status to 'Replied'
            if (!in_array($table, ['contact_messages', 'product_enquiries'])) {
                echo json_encode(['success' => false, 'message' => 'Invalid table for status update.']);
                exit();
            }
            $stmt = $db->prepare("UPDATE $table SET status = 'Replied' WHERE id = ?");
            $result = $stmt->execute([$id]);
            echo json_encode(['success' => $result, 'message' => $result ? 'Status updated to Replied.' : 'Failed to update status.']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Invalid action.']);
        }
    } catch(PDOException $exception) {
        echo json_encode(['success' => false, 'message' => 'Database error: ' . $exception->getMessage()]);
    }
    exit();
}

header('Location: dashboard.php');
exit();
?>
