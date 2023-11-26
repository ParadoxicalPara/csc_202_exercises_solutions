<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Area and Perimeter</title>
    </head>
    <body>
        <h2>Area and Perimeter of a Circle:</h2>
        <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
            <p>Enter radius:
                <input type="number" name="radius">
            </p>
            <input type="submit" value="Enter radius">
        </form>

    </body>
</html>

<?php
    $PI = 3.1415;
    if ($_SERVER['REQUEST_METHOD']=="POST") {
        $radius = $_POST["radius"];

        $area = $PI*$radius*$radius;
        $perimeter = 2*$PI*$radius;
        echo "<p> Area: $area</p>
        <p> Perimeter: $perimeter";

    }

?>