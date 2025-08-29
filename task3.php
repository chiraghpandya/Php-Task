<?php
$a = 10;
$b = 3;

echo "Arithmetic Operators:\n";
echo "$a + $b = " . ($a + $b) . "<br>"; 
echo "$a - $b = " . ($a - $b) . "<br>"; 
echo "$a * $b = " . ($a * $b) . "<br>"; 
echo "$a / $b = " . ($a / $b) . "<br>"; 
echo "$a % $b = " . ($a % $b) . "<br>"; 
echo "$a ** $b = " . ($a ** $b) . "<br>"; 
echo "<br>";
echo "<br>";


echo "Assignment Operators: <br>";
$c = 5;
echo "Initial value of c: $c <br>";

$c += 3; 
echo "After value of \$c += 3: $c <br>";

$c -= 2; 
echo "After value of \$c -= 2: $c <br>";

$c *= 4;
echo "After value of \$c *= 4: $c <br>";

$c /= 3; 
echo "After value of \$c /= 3: $c <br>";

echo "<br>";
echo "<br>";


echo "Comparison Operators: <br>";
$x = 5;
$y = 10;

echo "$x == $y : " . var_export($x == $y, true) . "<br>";   
echo "$x != $y : " . var_export($x != $y, true) . "<br>"; 
echo "$x < $y : " . var_export($x < $y, true) . "<br>";     
echo "$x > $y : " . var_export($x > $y, true) . "<br>";     
echo "$x <= $y : " . var_export($x <= $y, true) . "<br>";   
echo "$x >= $y : " . var_export($x >= $y, true) . "<br>";   
echo "<br>";
echo "<br>";

echo "Logical Operators: <br>";
$p = true;
$q = false;

echo "p && q : " . var_export($p && $q, true) . "<br>";  
echo "p || q : " . var_export($p || $q, true) . "<br>";  
echo "!p : " . var_export(!$p, true) . "<br>";              
echo "p xor q : " . var_export($p xor $q, true) . "<br>"; 
?>
