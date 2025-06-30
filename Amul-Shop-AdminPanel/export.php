<?php
require_once 'includes/session.php';
require_once 'config/database.php';

checkLogin();

// Only allow admin access
if (!isAdmin()) {
    header('Location: dashboard.php');
    exit();
}

$table = $_GET['table'] ?? '';
$allowed_tables = ['contact_messages', 'product_enquiries', 'users'];

if (!in_array($table, $allowed_tables)) {
    header('Location: dashboard.php');
    exit();
}

// Get database connection
$database = new Database();
$db = $database->getConnection();

try {
    $stmt = $db->prepare("SELECT * FROM $table ORDER BY id DESC");
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Set headers for CSV download
    $filename = $table . '_export_' . date('Y-m-d_H-i-s') . '.csv';
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '"');
    header('Pragma: no-cache');
    header('Expires: 0');
    
    // Create file pointer connected to the output stream
    $output = fopen('php://output', 'w');
    
    // Add CSV headers
    if (!empty($data)) {
        fputcsv($output, array_keys($data[0]));
        
        // Add data rows
        foreach ($data as $row) {
            // Convert passwords to [PROTECTED] for users table
            if ($table === 'users' && isset($row['password'])) {
                $row['password'] = '[PROTECTED]';
            }
            fputcsv($output, $row);
        }
    }
    
    fclose($output);
    exit();
    
} catch(PDOException $exception) {
    header('Location: dashboard.php?error=export_failed');
    exit();
}
?>
