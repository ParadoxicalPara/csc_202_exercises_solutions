<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Score Grader</title>
    </head>
    <body>
        <h2>Enter score to be graded: </h2>

        <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
            <p>Score: <input type="number" name="inScore"></P>
            <input type="submit" value="Compute Grade">
        </form>

    </body>
</html>

<?php
    function computeGrade($grade) {
        if (0<=$grade && $grade < 45) {
            return "F";
        }
        elseif (45<=$grade && $grade <50) { 
            return "D";
        }
        elseif (50<=$grade && $grade < 60) {
            return "C";
        }
        elseif (60<=$grade && $grade < 70) {
            return "B";
        }
        elseif (70<=$grade && $grade <= 100) {
            return "A";
        }
        else {
            return "Invalid score!<br>Score must be 1-100.";
        }
    }

  if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $score = $_POST["inScore"];
    $grade = computeGrade($score);
    echo "<h3> Grade: $grade</h3>";
  }

?>