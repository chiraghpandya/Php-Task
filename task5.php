<?php

echo "<h2>Printing Numbers 5 to 10</h2>";

echo "<h3>Using for loop:</h3>";
for ($i = 5; $i <= 10; $i++) {
    echo $i . " ";
}
echo "<br><br>";

echo "<h3>Using foreach loop:</h3>";
$numbers = array(5, 6, 7, 8, 9, 10);
foreach ($numbers as $number) {
    echo $number . " ";
}
echo "<br><br>";

echo "<h3>Using foreach with range() function:</h3>";
foreach (range(5, 10) as $value) {
    echo $value . " ";
}
?>
