<?php
include 'db/db.php';

// Check if database connection is available
if (!$conn) {
    echo "Database connection error. Please try again later or contact support.";
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $email = $_POST['email'] ?? null;
    $subject = $_POST['subject'] ?? '';
    $message = $_POST['message'] ?? '';
    $consent = isset($_POST['consent']) ? 1 : 0;

    $stmt = $conn->prepare("INSERT INTO contact_messages (name, phone, email, subject, message, consent) VALUES (?, ?, ?, ?, ?, ?)");
    
    if (!$stmt) {
        echo "Error in preparing statement: " . $conn->error;
        exit;
    }
    
    $stmt->bind_param("sssssi", $name, $phone, $email, $subject, $message, $consent);

    if ($stmt->execute()) {
        echo "Form submitted successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
