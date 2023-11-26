<!-- A php program to compute the roots of a quadratic equation-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">      <!--This line is optional-->
        <title>Quadratic Solver</title>
        <style> /*This style code is to reduce the size of the inputs*/
            input[name] {
                width: 30px;
            }
        </style>
    </head>
    <body>
        <h1>Quadratic Equation Solver</h1> <!--This is to print the heading of the website-->
        <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">

            <p>
                Enter Values:  <span><input type="number" name="a"></span> X^2 + <span><input type="number" name="b"></span> X + <span><input type="number" name="c"></span> = 0
            </p>
            <input type="submit" value="Enter">
        </form>
    </body>
</html>

<?php
    // Funtion to compute the roots of the quadratic
    function compute_quadratic_roots_of($a, $b, $c) {
        $discriminant = $b**2 - 4*$a*$c;

        // the condition below takes care of complex roots
        if ($discriminant < 0) {
            $real_side = (-$b/(2*$a));
            $imag_side = ((-$discriminant)**(1/2))/(2*$a);

            $root1 = "$real_side + i$imag_side";
            $root2 = "$real_side - i$imag_side";

            return array($root1, $root2);
        }

        // this aspect takes care of real roots
        $root1 = (-$b + $discriminant**(1/2))/(2*$a);
        $root2 = (-$b - $discriminant**(1/2))/(2*$a);
        return array($root1, $root2);
    }

    if ($_SERVER['REQUEST_METHOD']=="POST") {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];

        $roots = compute_quadratic_roots_of($a, $b, $c);

        echo "<p>Result:</p> <p>Root1: $roots[0]</p> <p>Root2: $roots[1]</p>";
    }
?>