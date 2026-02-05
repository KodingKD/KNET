<?php
// Force load config if not already loaded or if constants missing
if (!defined('DB_HOST') || !defined('DB_NAME')) {
    $configPath = __DIR__ . '/config.php';
    if (file_exists($configPath)) {
        require_once $configPath;
    }
}

/**
 * Database Connection using PDO
 */
function get_db_connection()
{
    static $pdo = null;

    if ($pdo === null) {
        // Fallbacks (If config failed to load for some odd reason)
        $host = defined('DB_HOST') ? DB_HOST : 'sdb-83.hosting.stackcp.net';
        $name = defined('DB_NAME') ? DB_NAME : 'knet_production-35303934f82e';
        $user = defined('DB_USER') ? DB_USER : 'knet_production-35303934f82e';
        $pass = defined('DB_PASS') ? DB_PASS : '48tzm3j75j';

        // Construct DSN
        $dsn = "mysql:host={$host};dbname={$name};charset=utf8mb4";

        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];

        try {
            $pdo = new PDO($dsn, $user, $pass, $options);
        } catch (PDOException $e) {
            // DEBUGGING: Show exactly what we tried to connect to
            die("<h1>Database Connection Failed</h1>
                 <p><strong>Error:</strong> " . $e->getMessage() . "</p>
                 <hr>
                 <h3>Debug Details:</h3>
                 <ul>
                    <li><strong>Attempted Host:</strong> $host</li>
                    <li><strong>Attempted DB:</strong> $name</li>
                    <li><strong>Env Constant:</strong> " . (defined('APP_ENV') ? APP_ENV : 'NOT_DEFINED') . "</li>
                 </ul>
                 <p><em>Please verify these details match your StackCP configuration.</em></p>");
        }
    }

    return $pdo;
}

// Global DB instance
$db = get_db_connection();
