<?php
// Database configuration
$host = "127.0.0.1";       // Server
$username = "root";        // Default username
$password = "";            // Default password (empty on localhost)
$database = "amul"; // ⚠️ Replace this with your actual DB name

// Create connection using MySQLi
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// Optional: echo to confirm
// echo "Database connected successfully!";
?>
