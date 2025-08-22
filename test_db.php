<?php
// Database connection test for XAMPP
include 'db/db.php';

echo "<h1>Amul Shop - Database Connection Test</h1>";
echo "<hr>";

if ($conn) {
    echo "<h2 style='color:green'>✅ Database Connection Successful!</h2>";
    echo "<p><strong>Connected to:</strong> " . $conn->host_info . "</p>";
    echo "<p><strong>Server Version:</strong> " . $conn->server_info . "</p>";
    echo "<p><strong>Database:</strong> amul</p>";
    
    // Test a simple query
    $result = $conn->query("SHOW TABLES");
    if ($result) {
        echo "<h3>📋 Available Tables:</h3>";
        echo "<ul>";
        $table_count = 0;
        while ($row = $result->fetch_row()) {
            echo "<li><strong>" . $row[0] . "</strong></li>";
            $table_count++;
        }
        echo "</ul>";
        echo "<p><em>Total tables: $table_count</em></p>";
        
        // Test table data
        echo "<h3>📊 Table Data Summary:</h3>";
        $tables = ['contact_messages', 'product_enquiries', 'users'];
        echo "<ul>";
        foreach($tables as $table) {
            $count_result = $conn->query("SELECT COUNT(*) as count FROM $table");
            if ($count_result) {
                $count = $count_result->fetch_assoc()['count'];
                echo "<li><strong>$table:</strong> $count records</li>";
            } else {
                echo "<li><strong>$table:</strong> <span style='color:orange'>Table not found or error</span></li>";
            }
        }
        echo "</ul>";
        
    } else {
        echo "<p style='color:orange'>⚠️ Error listing tables: " . $conn->error . "</p>";
    }
    
    echo "<hr>";
    echo "<h3>🔗 Quick Links:</h3>";
    echo "<ul>";
    echo "<li><a href='index.php'>Main Website</a></li>";
    echo "<li><a href='Amul-Shop-AdminPanel/'>Admin Panel</a></li>";
    echo "<li><a href='http://localhost/phpmyadmin' target='_blank'>phpMyAdmin</a></li>";
    echo "</ul>";
    
    $conn->close();
} else {
    echo "<h2 style='color:red'>❌ Database Connection Failed!</h2>";
    echo "<p>Please check the following:</p>";
    echo "<ol>";
    echo "<li>XAMPP is running (Apache & MySQL)</li>";
    echo "<li>Database 'amul' exists in phpMyAdmin</li>";
    echo "<li>Database credentials in db/db.php are correct</li>";
    echo "</ol>";
    echo "<p><a href='http://localhost/phpmyadmin' target='_blank'>Open phpMyAdmin</a></p>";
}
?>
