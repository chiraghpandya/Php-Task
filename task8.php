<!DOCTYPE html>
<html>
<head>
    <title>Array Operations</title>
</head>
<body>

<form method="post">
    Enter first array values (comma separated): 
    <input type="text" name="arr1"><br><br>

    Enter second array values (comma separated): 
    <input type="text" name="arr2"><br><br>

    <input type="submit" name="submit" value="Perform Operations">
</form>

<?php
if (isset($_POST['submit'])) {
    $arr1 = explode(",", str_replace(" ", "", $_POST['arr1']));
    $arr2 = explode(",", str_replace(" ", "", $_POST['arr2']));

    // a) Print the values of array
    echo "<h3>a) Array 1:</h3>";
    print_r($arr1);

    // b) Reverse an array
    echo "<h3>b) Reverse of Array 1:</h3>";
    print_r(array_reverse($arr1));

    // c) Merge two arrays in sorted manner
    $merged = array_merge($arr1, $arr2);
    sort($merged);
    echo "<h3>c) Merged & Sorted Array:</h3>";
    print_r($merged);

    // d) Add values of all elements of an array
    // Convert all to numbers before summing
    $numericArray = array_map('floatval', $arr1);
    $sum = array_sum($numericArray);
    echo "<h3>d) Sum of elements in Array 1:</h3>";
    echo $sum;
    
    // e) Add values of all elements of an array
    // Convert all to numbers before summing
    $numericArray = array_map('floatval', $arr2);
    $sum = array_sum($numericArray);
    echo "<h3>E) Sum of elements in Array 2:</h3>";
    echo $sum;
}
?>

</body>
</html>