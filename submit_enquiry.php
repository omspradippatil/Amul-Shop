<?php
include 'db/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $email = $_POST['email'] ?? null;
    $preferredContact = $_POST['preferredContact'] ?? '';
    $productCategory = $_POST['productCategory'] ?? '';
    $productName = $_POST['productName'] ?? '';
    $enquiryType = $_POST['enquiryType'] ?? '';
    $urgency = $_POST['urgency'] ?? 'normal';
    $message = $_POST['message'] ?? '';
    $consent = isset($_POST['termsCheck']) ? 1 : 0;
    
    // Set default status
    $status = 'pending';

    // Prepare and execute SQL statement
    $stmt = $conn->prepare("INSERT INTO product_enquiries (name, phone, email, preferred_contact, product_category, product_name, enquiry_type, urgency, message, consent, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssssss", $name, $phone, $email, $preferredContact, $productCategory, $productName, $enquiryType, $urgency, $message, $consent, $status);

    if ($stmt->execute()) {
        echo "Enquiry submitted successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
