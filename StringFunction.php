<?php
$str="I love iphone,in case of no phone.";
echo $str;
$str2="IS";
echo $str2;

echo "<br>";
echo "length: " . strlen($str);
echo "<br>";

echo "<br>";
echo "comparision: " . strcmp($str,$str2,);
echo "<br>";

echo "<br>";
echo "trim:" . trim($str);
echo "<br>";

$datatrimmed=trim($str);

echo "<br>";
echo "length:" . strlen($datatrimmed);
echo "<br>";

echo "<br>";
echo "strpos:" . strpos($str,$str2,5);
echo "<br>";

echo "<br>";
echo "strpos:" . strrev($str);
echo "<br>";

echo "<br>";
echo "strstr false: " . strstr($str,$str2,false);
echo "<br>";

echo "<br>";
echo "strstr true: " . strstr($str,$str2,true);
echo "<br>";

echo "<br>";
echo "stristr false: " . stristr($str,$str2,false);
echo "<br>";

echo "<br>";
echo "stristr true: " . stristr($str,$str2,true);
echo "<br>";

echo "<br>";
echo "lower:" . strtolower($str);
echo "<br>";

echo "<br>";
echo "upper: " . strtoupper($str);
echo "<br>";

echo "<br>";
echo " replace CHIRAG WITH CHIRAG PANDYA: " . str_replace("CHIRAG","CHIRAG PANDYA",$str);
echo "<br>";

echo "<br>";
echo "substring: " . substr($str,0,5);
echo "<br>";

echo "<br>";
echo "substring count:" . substr_count($str," ");
echo "<br>";

echo "<br>";
echo "<pre>";
print_r(explode(",",$str));
echo "<br>";
?>