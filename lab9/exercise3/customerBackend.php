<?php

echo "<link rel='stylesheet' href='style.css'>";
echo "<body class='receipt'>";
echo "<p>Welcome " . $_POST["email"] . "!<br>";
echo "Your password is <b>" . $_POST["password"] . "</b></p>";

$total = 0;
$max = 3;
$row = ["", "Quantity", "Unit Cost", "Subtotal"];
$items = ["pink Scrunshies 10 pack", "pink Scrunshies 15 pack", "pink Scrunshies 30 pack"];
$prices = [16.00, 22.00, 33.00];
echo "<h2>Receipt</h2><table>";
for ($i=0; $i < $max+3; $i++) {
    echo "<tr>";
    for ($j=0; $j < 4; $j++) {
        if ($i == 0) {
            echo "<th>" . $row[$j] . "</th>";
        } else if ($i == ($max+1)) {
            switch ($j) {
            case 0:
            echo "<th>Shipping</th>";
            break;

            case 1:
            if ($_POST["ship1"] == 0) {
            $shipping = "Free";
            }
            if ($_POST["ship2"] == 50) {
            $shipping = "Overnight";
            }
            if ($_POST["ship3"] == 5) {
            $shipping = "Three Day";
            }
            echo "<td colspan=2>" . $shipping . "</td>";
            break;

            case 3:
            echo "<td>$" . number_format($_POST["ship"], 2) . "</td>";
            $total += $_POST["ship"];
            break;

            default:
            echo "";
            break;
            }
        } else if ($i == ($max+2)) {
            if ($j == 0) {
            echo "<th colspan=3>Total Costs</th>";
            }

            if ($j == 3) {
            echo "<td class='total'>$" . number_format($total, 2) . "</td>";
            }
        } else {
            switch ($j) {
            case 0:
            echo "<th>" . $items[$i-1] . "</th>";
            break;
            case 1:
            echo "<td>" . $_POST["item" . $i] . "</td>";
            break;
            case 2:
            echo "<td>$" . number_format($prices[$i-1], 2) . "</td>";
            break;
            case 3:
            echo "<td>$" . number_format($_POST["item" . $i]*$prices[$i-1], 2) . "</td>";
            $total += $_POST["item" . $i]*$prices[$i-1];
            break;
            default:
            break;
            }
        }
    }
    echo "</tr>";
}
echo "</table";
echo "</body>";
?>
