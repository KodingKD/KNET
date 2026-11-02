<?php
/**
 * Site Configuration
 */

// Deployment Environment (development/production)
define('APP_ENV', 'production');

// Site Metadata
define('SITE_NAME', 'KNET NETWORK SOLUTIONS LIMITED');
define('SITE_URL', 'https://knet.co.ke');
define('SITE_EMAIL_ADMIN', 'admin@knet.co.ke');
define('SITE_EMAIL_SUPPORT', 'support@knet.co.ke');
define('SITE_EMAIL_SALES', 'sales@knet.co.ke');
define('SITE_PHONE', '0743 820 177');
define('SITE_PHONE_SECONDARY', '0704 250 216');
define('SITE_PHONE_CORPORATE', '0182 663 137');
define('WHATSAPP_NUMBER', '254743820177');

// Corporate Details & Addresses
define('SITE_ADDRESS_PHYSICAL', 'Ngong Road, Dagoretti, Nairobi, Kenya');
define('SITE_ADDRESS_POSTAL', 'P.O. Box 58 – 50308 Serem, Kenya');
define('MPESA_PAYBILL', '4002805');

// Official Social Channels
define('SOCIAL_LINKEDIN', 'https://linkedin.com/company/109987486/');
define('SOCIAL_FACEBOOK', 'https://facebook.com/share/19tkqJyMgp/');
define('SOCIAL_TWITTER', 'https://x.com/KNET_SOLUTIONS');
define('SOCIAL_INSTAGRAM', 'https://instagram.com/knetsolutionsltd');
define('SOCIAL_TIKTOK', 'https://tiktok.com/@knetsolutionsltd');
define('SOCIAL_YOUTUBE', 'https://youtube.com/@KNETNETWORKSOLUTIONSLIMITED');

// Database Configuration
define('DB_HOST', 'sdb-83.hosting.stackcp.net');
define('DB_NAME', 'knet_production-35303934f82e');
define('DB_USER', 'knet_production-35303934f82e');
define('DB_PASS', '48tzm3j75j');

// Paths
define('BASE_PATH', dirname(__DIR__));
define('INCLUDES_PATH', BASE_PATH . '/includes');
define('PUBLIC_PATH', BASE_PATH . '/public');

// Display errors in development
if (APP_ENV === 'development') {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
} else {
    ini_set('display_errors', 0);
    error_reporting(0);
}
