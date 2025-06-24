<?php
include 'db/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $email = $_POST['email'] ?? null;
    $subject = $_POST['subject'] ?? '';
    $message = $_POST['message'] ?? '';
    $consent = isset($_POST['consent']) ? 1 : 0;

    $stmt = $conn->prepare("INSERT INTO contact_messages (name, phone, email, subject, message, consent) VALUES (?, ?, ?, ?, ?, ?)");
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
