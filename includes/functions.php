<?php
/**
 * Utility Functions
 */

/**
 * Sanitize output for HTML
 */
function e($text)
{
    return htmlspecialchars($text ?? '', ENT_QUOTES, 'UTF-8');
}

/**
 * Redirect to a URL
 */
function redirect($url)
{
    header("Location: $url");
    exit;
}

/**
 * Get the current page filename
 */
function get_current_page()
{
    return basename($_SERVER['PHP_SELF']);
}

/**
 * Check if current page matches
 */
function is_active_page($page)
{
    return get_current_page() === $page;
}

/**
 * Format phone number for WhatsApp link
 */
function format_whatsapp_link($phone, $message = "")
{
    $clean_phone = preg_replace('/[^0-9]/', '', $phone);
    if (strpos($clean_phone, '0') === 0) {
        $clean_phone = '254' . substr($clean_phone, 1);
    }
    return "https://wa.me/" . $clean_phone . "?text=" . urlencode($message);
}

/**
 * Include a component
 */
function render_component($name, $data = [])
{
    extract($data);
    $path = INCLUDES_PATH . "/components/{$name}.php";
    if (file_exists($path)) {
        include $path;
    }
}
