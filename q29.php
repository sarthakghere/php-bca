<!-- // Q29: Find HCF of two numbers -->
<?php
    $a = 36;
    $b = 60;
    while ($b != 0) {
        $t = $b;
        $b = $a % $b;
        $a = $t;
    }
    echo "HCF is " . $a;
    echo "\nCode by Sarthak Gupta - 2220100292\n";
?>