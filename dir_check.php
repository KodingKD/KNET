<?php
echo "<h1>Directory Scanner</h1>";
echo "Current File: " . __FILE__ . "<br>";
echo "Current Dir: " . __DIR__ . "<br><hr>";

function scan($dir)
{
    echo "<h3>Scanning: $dir</h3>";
    if (!is_dir($dir)) {
        echo "❌ Not a directory.<br>";
        return;
    }
    $files = scandir($dir);
    echo "<ul>";
    foreach ($files as $f) {
        if ($f == '.' || $f == '..')
            continue;
        $path = $dir . '/' . $f;
        $type = is_dir($path) ? "[DIR]" : "[FILE]";
        echo "<li>$type $f</li>";
    }
    echo "</ul>";
}

// Scan public (where this file is)
scan(__DIR__);

// Scan parent (public_html)
scan(dirname(__DIR__));

// Scan includes
scan(dirname(__DIR__) . '/includes');
?>