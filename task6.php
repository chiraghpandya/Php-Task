<?php

echo "<h2>Printing numbers 15 to 20 using WHILE loop:</h2>";
$num = 15;
while ($num <= 20) {
    echo $num . " ";
    $num++;
}

echo "<br><br>";

echo "<h2>Printing numbers 15 to 20 using DO-WHILE loop:</h2>";
$num = 15;
do {
    echo $num . " ";
    $num++;
} while ($num <= 20);

?>

