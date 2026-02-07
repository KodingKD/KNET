<?php
require_once __DIR__ . '/../../includes/config.php';
require_once __DIR__ . '/../../includes/functions.php';

$area = trim($_POST['area'] ?? '');

if (empty($area)) {
    header("Location: ../coverage.php");
    exit;
}

$message = "Hello KNET, I'd like to check if you have internet coverage in specialized area: " . $area;
$whatsapp_link = format_whatsapp_link(WHATSAPP_NUMBER, $message);

header("Location: " . $whatsapp_link);
exit;
