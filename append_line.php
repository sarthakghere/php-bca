<?php
for ($i = 48; $i <= 74; $i++) {
    $filename = "q$i.php";
    $line = "\n" . 'echo "\nCode by Sarthak Gupta - 2220100292\n";' . "\n";

    if (!file_exists($filename)) continue;

    $content = file_get_contents($filename);

    if (strpos($content, '?>') !== false) {
        // Insert before the closing tag
        $content = str_replace('?>', $line . '?>', $content);
    } else {
        // No closing tag, just append
        $content .= "\n" . $line;
    }

    file_put_contents($filename, $content);
}
?>
