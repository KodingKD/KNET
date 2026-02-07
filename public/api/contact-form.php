<?php
header('Content-Type: application/json');
require_once __DIR__ . '/../../includes/db_connect.php';
require_once __DIR__ . '/../../includes/functions.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

// Simple input sanitization
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$service = trim($_POST['service_interest'] ?? '');
$message = trim($_POST['message'] ?? '');
$ip = $_SERVER['REMOTE_ADDR'] ?? '';

// Basic Validation
if (empty($name) || empty($phone) || empty($message)) {
    echo json_encode(['success' => false, 'message' => 'Please fill in all required fields.']);
    exit;
}

try {
    $stmt = $db->prepare("INSERT INTO contact_submissions (name, email, phone, service_interest, message, ip_address) VALUES (?, ?, ?, ?, ?, ?)");
    $success = $stmt->execute([$name, $email, $phone, $service, $message, $ip]);

    if ($success) {
        // Optionally send an email notification here
        // mail(SITE_EMAIL, "New Lead: $name", "Name: $name\nPhone: $phone\nService: $service\n\n$message");

        echo json_encode(['success' => true, 'message' => 'Thank you! Your message has been sent.']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to save submission.']);
    }

} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
}
