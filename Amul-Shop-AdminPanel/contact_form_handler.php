<?php
require_once 'config/database.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
    exit();
}

// Get and sanitize input
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$message = trim($_POST['message'] ?? '');
$phone = trim($_POST['phone'] ?? ''); // Optional
$subject = trim($_POST['subject'] ?? 'Contact Form');
$consent = isset($_POST['consent']) ? (int)$_POST['consent'] : 1;

if ($name === '' || $message === '') {
    echo json_encode(['success' => false, 'message' => 'Name and message are required.']);
    exit();
}

try {
    $database = new Database();
    $db = $database->getConnection();
    $stmt = $db->prepare("INSERT INTO contact_messages (name, phone, email, subject, message, consent) VALUES (?, ?, ?, ?, ?, ?)");
    $result = $stmt->execute([$name, $phone, $email, $subject, $message, $consent]);

    if ($result) {
        // Prepare email
        $to = '123om40029@sjcem.edu.in';
        $mail_subject = "New Contact Message from $name";
        $mail_body = "You have received a new contact message.\n\n" .
            "Name: $name\n" .
            "Email: $email\n" .
            "Phone: $phone\n" .
            "Subject: $subject\n" .
            "Message:\n$message\n";
        $headers = "From: no-reply@yourdomain.com\r\n" .
                   "Reply-To: $email\r\n";
        mail($to, $mail_subject, $mail_body, $headers);
        echo json_encode(['success' => true, 'message' => 'Thank you for contacting us!']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to save your message.']);
    }
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
} 