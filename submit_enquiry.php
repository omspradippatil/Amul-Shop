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
$preferredContact = trim($_POST['preferredContact'] ?? '');
$productCategory = trim($_POST['productCategory'] ?? '');
$productName = trim($_POST['productName'] ?? '');
$enquiryType = trim($_POST['enquiryType'] ?? '');
$urgency = trim($_POST['urgency'] ?? 'normal');
$message = trim($_POST['message'] ?? '');
$consent = isset($_POST['termsCheck']) ? 1 : 0;
$status = 'pending';

if ($name === '' || !preg_match('/^[0-9]{10}$/', $phone) || $preferredContact === '' || $productCategory === '' || $enquiryType === '' || $message === '' || $consent !== 1) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Please complete all required fields with a valid 10-digit phone number.']);
    $conn->close();
    exit;
}

$stmt = $conn->prepare("INSERT INTO product_enquiries (name, phone, email, preferred_contact, product_category, product_name, enquiry_type, urgency, message, consent, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

if (!$stmt) {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Unable to process your enquiry right now. Please try again later.']);
    $conn->close();
    exit;
}

$stmt->bind_param("sssssssssis", $name, $phone, $email, $preferredContact, $productCategory, $productName, $enquiryType, $urgency, $message, $consent, $status);

if ($stmt->execute()) {
    echo json_encode(['success' => true, 'message' => 'Enquiry submitted successfully!']);
} else {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Unable to save your enquiry. Please try again later.']);
}

$stmt->close();
$conn->close();
?>
