<?php
for ($i = 48; $i <= 74; $i++) {
    $filename = "q$i.php";
    if (!file_exists($filename)) continue;

    $content = file_get_contents($filename);

    // Pattern to match the exact echo line with or without leading/trailing spaces/newlines
    $content = preg_replace(
        '/Oshin Mehta - 2220100273/i',
        'Sarthak Gupta - 2220100292', 
        $content);
    file_put_contents($filename, $content);
}
echo "Undo complete: Line removed from q48.php to q90.php.";
?>
