<?php
// Database connection test
include 'db/db.php';

if ($conn) {
    echo "<h2 style='color:green'>Database Connection Successful!</h2>";
    echo "<p>Connected to: " . $conn->host_info . "</p>";
    
    // Test a simple query
    $result = $conn->query("SHOW TABLES");
    if ($result) {
        echo "<h3>Available Tables:</h3>";
        echo "<ul>";
        while ($row = $result->fetch_row()) {
            echo "<li>" . $row[0] . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Error listing tables: " . $conn->error . "</p>";
    }
    
    $conn->close();
} else {
    echo "<h2 style='color:red'>Database Connection Failed!</h2>";
    echo "<p>Please check your database credentials.</p>";
}
?>
