<!DOCTYPE html>
<html>
<head>
    <style>
        table { border-collapse: collapse; }
        td {
            width: 40px; height: 40px;
        }
    </style>
</head>
<body>
    <table border="1">
        <?php
        for ($row = 0; $row < 8; $row++) {
            echo "<tr>";
            for ($col = 0; $col < 8; $col++) {
                $color = ($row + $col) % 2 == 0 ? "#ffffff" : "#000000";
                echo "<td style='background:$color;'></td>";
            }
            echo "</tr>";
        }
        echo "<br>Code by Sarthak Gupta - 2220100292<br>";
        ?>
    </table>
</body>
</html>

