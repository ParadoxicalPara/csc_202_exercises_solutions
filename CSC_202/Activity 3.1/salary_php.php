<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Grade Salaries</title>
    </head>
    <body>
        <h2>Compute Grade Salary: </h2>

        <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
            <p>
                Enter Grade: <input type="text" name="user_grade">
            </p>
            <input type="submit" value="Compute Salary">
        </form>
    </body>
</html>

<?php
    // A function to compute the salary corresponding to every grade.
    function computeGradeSalary($grade) {
        $grade = ucfirst($grade);
        switch ($grade) {
            case "A":
                return "#15,000";
            case "B":
                return "#12,000";
            case "C":
                return "#10,000";
            case "D":
                return "#9,000";
            default:
                return "Invalid grade<br>Grade must be A, B, C or D.";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $grade = $_POST["user_grade"];
        $salary = computeGradeSalary($grade);
        echo "<h3> Salary: $salary</h3>";
    }
?>