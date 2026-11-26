<?php
header('Content-Type: application/json; charset=UTF-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed.']);
    exit;
}

include 'db/db.php';

if (!$conn) {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Database connection error. Please try again later or contact support.']);
    exit;
}

$name = trim($_POST['name'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$email = trim($_POST['email'] ?? '');
$email = ($email === '') ? null : $email;
$subject = trim($_POST['subject'] ?? '');
$message = trim($_POST['message'] ?? '');
$consent = isset($_POST['consent']) ? 1 : 0;

if ($name === '' || !preg_match('/^[0-9]{10}$/', $phone) || $subject === '' || $message === '' || $consent !== 1) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Please complete all required fields with a valid 10-digit phone number.']);
    $conn->close();
    exit;
}

$stmt = $conn->prepare("INSERT INTO contact_messages (name, phone, email, subject, message, consent) VALUES (?, ?, ?, ?, ?, ?)");

if (!$stmt) {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Unable to process your message right now. Please try again later.']);
    $conn->close();
    exit;
}

$stmt->bind_param("sssssi", $name, $phone, $email, $subject, $message, $consent);

if ($stmt->execute()) {
    echo json_encode(['success' => true, 'message' => 'Form submitted successfully!']);
} else {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Unable to save your message. Please try again later.']);
}

$stmt->close();
$conn->close();
?>
