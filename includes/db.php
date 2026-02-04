<?php
require_once __DIR__ . '/config.php';

/**
 * Database Connection using PDO
 */
function get_db_connection() {
    static $pdo = null;

    if ($pdo === null) {
        $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4";
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        try {
            $pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
        } catch (PDOException $e) {
            if (APP_ENV === 'development') {
                die("Database connection failed: " . $e->getMessage());
            } else {
                error_log("Database connection failed: " . $e->getMessage());
                die("A database error occurred. Please try again later.");
            }
        }
    }

    return $pdo;
}

// Global DB instance
$db = get_db_connection();
