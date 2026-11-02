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
$contact_person = trim($_POST['contact_person'] ?? '');
$corridor = trim($_POST['corridor'] ?? '');
$ip = $_SERVER['REMOTE_ADDR'] ?? '';

// Basic Validation
if (empty($name) || empty($phone) || empty($message)) {
    echo json_encode(['success' => false, 'message' => 'Please fill in all required fields.']);
    exit;
}

// Format message to include optional B2B fields if present
$formatted_message = $message;
if (!empty($corridor)) {
    $formatted_message = "Corridor/Region: " . $corridor . "\n" . $formatted_message;
}
if (!empty($contact_person)) {
    $formatted_message = "Contact Person: " . $contact_person . "\n" . $formatted_message;
}

try {
    $stmt = $db->prepare("INSERT INTO contact_submissions (name, email, phone, service_interest, message, ip_address) VALUES (?, ?, ?, ?, ?, ?)");
    $success = $stmt->execute([$name, $email, $phone, $service, $formatted_message, $ip]);

    if ($success) {
        echo json_encode(['success' => true, 'message' => 'Thank you! Your message has been sent.']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to save submission.']);
    }

} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
}
