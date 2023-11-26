<!DOCTYPE html>
<html>
<head>
    <title>PHP Addition Program</title>
</head>
<body>

<h2>PHP Addition Program</h2>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Enter first number: <input type="number" name="num1">
    <br>
    Enter second number: <input type="number" name="num2">
    <br>
    <input type="submit" value="Add Numbers">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the values entered by the user
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    // Add the two numbers
    $sum = $num1 + $num2;

    // Display the result
    echo "Sum of $num1 and $num2 is: $sum";
}
?>

</body>
</html>
