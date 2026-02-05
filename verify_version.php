<?php
echo "<h1>File Content Verifier</h1>";

$file = __DIR__ . '/../includes/db.php';

if (file_exists($file)) {
    echo "<h3>Content of includes/db.php:</h3>";
    echo "<textarea style='width:100%; height:400px;'>";
    echo htmlspecialchars(file_get_contents($file));
    echo "</textarea>";

    echo "<hr>";
    echo "<h3>Configuration Check:</h3>";
    require_once __DIR__ . '/../includes/config.php';
    echo "APP_ENV constant: " . (defined('APP_ENV') ? APP_ENV : 'NOT DEFINED') . "<br>";
    echo "DB_HOST constant: " . (defined('DB_HOST') ? DB_HOST : 'NOT DEFINED') . "<br>";

} else {
    echo "❌ File $file NOT FOUND.";
}
?>