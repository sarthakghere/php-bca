<!DOCTYPE html>
<html>
<head>
    <title>Chess Board</title>
    <style>
        table {
            border: 2px solid black;
            border-collapse: collapse;
        }
        td {
            width: 60px;
            height: 60px;
        }
        .white {
            background-color: #f0d9b5;
        }
        .black {
            background-color: #b58863;
        }
    </style>
</head>
<body>

<h3>Chess Board</h3>

<table>
    <?php
    for ($row = 1; $row <= 8; $row++) {
        echo "<tr>";
        for ($col = 1; $col <= 8; $col++) {
            // Alternate colors using modulus
            $color = ($row + $col) % 2 == 0 ? "white" : "black";
            echo "<td class='$color'></td>";
        }
        echo "</tr>";
    }
    
echo "\nCode by Sarthak Gupta - 2220100292\n";
?>
</table>

</body>
</html>
