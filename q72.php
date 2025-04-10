<?php
$a = 6;  // 0110 in binary
$b = 3;  // 0011 in binary

echo "a = $a\n";
echo "b = $b\n\n";

// Bitwise AND
echo "a & b = " . ($a & $b) . "\n"; // 0110 & 0011 = 0010 (2)

// Bitwise OR
echo "a | b = " . ($a | $b) . "\n"; // 0110 | 0011 = 0111 (7)

// Bitwise XOR
echo "a ^ b = " . ($a ^ $b) . "\n"; // 0110 ^ 0011 = 0101 (5)

// Bitwise NOT
echo "~a = " . (~$a) . "\n";       // ~0110 = ...11111001 (-7)

// Left shift
echo "a << 1 = " . ($a << 1) . "\n"; // 0110 << 1 = 1100 (12)

// Right shift
echo "a >> 1 = " . ($a >> 1) . "\n"; // 0110 >> 1 = 0011 (3)

echo "\nCode by Sarthak Gupta - 2220100292\n";
?>
