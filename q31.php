<!-- Q31. Write a PHP program to  check if a number is an Armstrong number: -->
    <?php
        $num = 153;
        $temp = $num;
        $sum = 0;
        while ($temp > 0) {
            $digit = $temp % 10;
            $sum = $sum + ($digit * $digit * $digit);
            $temp = $temp / 10;
            }
            if ($num == $sum) {
            echo "The number is an Armstrong number.";
            } else {
            echo "The number is not an Armstrong number.";
            }
        echo "\nCode by Sarthak Gupta - 2220100292\n";
    ?>