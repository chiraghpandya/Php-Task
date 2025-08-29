<?php

$currentMonth = date('n');

echo "<h2>Current Month Display</h2>";
echo "<p>Current month number: $currentMonth</p>";

echo "<h3>Using if-else statement:</h3>";
if ($currentMonth == 1) {
    echo "January";
} elseif ($currentMonth == 2) {
    echo "February";
} elseif ($currentMonth == 3) {
    echo "March";
} elseif ($currentMonth == 4) {
    echo "April";
} elseif ($currentMonth == 5) {
    echo "May";
} elseif ($currentMonth == 6) {
    echo "June";
} elseif ($currentMonth == 7) {
    echo "July";
} elseif ($currentMonth == 8) {
    echo "August";
} elseif ($currentMonth == 9) {
    echo "September";
} elseif ($currentMonth == 10) {
    echo "October";
} elseif ($currentMonth == 11) {
    echo "November";
} elseif ($currentMonth == 12) {
    echo "December";
} else {
    echo "Invalid month";
}

echo "<br><br>";

echo "<h3>Using switch case statement:</h3>";
switch ($currentMonth) {
    case 1:
        echo "January";
        break;
    case 2:
        echo "February";
        break;
    case 3:
        echo "March";
        break;
    case 4:
        echo "April";
        break;
    case 5:
        echo "May";
        break;
    case 6:
        echo "June";
        break;
    case 7:
        echo "July";
        break;
    case 8:
        echo "August";
        break;
    case 9:
        echo "September";
        break;
    case 10:
        echo "October";
        break;
    case 11:
        echo "November";
        break;
    case 12:
        echo "December";
        break;
    default:
        echo "Invalid month";
}

echo "<br><br>";

echo "<h3>Summary:</h3>";
echo "<div style='display: flex; gap: 20px;'>";
echo "<div style='border: 1px solid #ccc; padding: 10px;'>";
echo "<strong>If-else result:</strong> ";
if ($currentMonth == 1) echo "January";
elseif ($currentMonth == 2) echo "February";
elseif ($currentMonth == 3) echo "March";
elseif ($currentMonth == 4) echo "April";
elseif ($currentMonth == 5) echo "May";
elseif ($currentMonth == 6) echo "June";
elseif ($currentMonth == 7) echo "July";
elseif ($currentMonth == 8) echo "August";
elseif ($currentMonth == 9) echo "September";
elseif ($currentMonth == 10) echo "October";
elseif ($currentMonth == 11) echo "November";
else echo "December";
echo "</div>";

echo "<div style='border: 1px solid #ccc; padding: 10px;'>";
echo "<strong>Switch case result:</strong> ";
switch ($currentMonth) {
    case 1: echo "January"; break;
    case 2: echo "February"; break;
    case 3: echo "March"; break;
    case 4: echo "April"; break;
    case 5: echo "May"; break;
    case 6: echo "June"; break;
    case 7: echo "July"; break;
    case 8: echo "August"; break;
    case 9: echo "September"; break;
    case 10: echo "October"; break;
    case 11: echo "November"; break;
    default: echo "December";
}
echo "</div>";
echo "</div>";
?>
