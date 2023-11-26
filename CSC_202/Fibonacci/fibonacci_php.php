<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Fibonacci Finder</title>
        <style>
            .grid-container {
                display: grid;
                width: 100%;
                grid-template-rows: 2fr 6fr 1fr;
                gap: 10px;
            }

            .card  {
                background-color: skyblue;
                border-radius: 10px;
            }
            h1 {
                text-align: center;
                font-size: 3rem;
            }
            .footer {
                position: relative;
            }
            footer {
                margin: 20px;
            }
            input[value] {
                margin: 10px;
                background-color: black;
                color: white;
                border-radius: 5px;
            }
            input[name] {
                width: 30px;
            }
        </style>
    </head>
    <body>
        <div class="grid-container">
            <div class="card header">
                <h1>Find nth Fibonacci</h1>
            </div>

            <div class="card main">
                <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                    <p style="font-weight: bold; margin: 10px;">Enter n: <input type="number" name="user_n"></p>
                    
                    <input type="submit" value="Enter">
                </form>

                <p id="php-result">
                        <?php

                        // Function to calculate nth fibonacci number.
                        function Fibonacci($n) {
                            $result = array(1,1);
                            $i = $n;
                            while ($i>2) {
                                $result = array($result[1], $result[0]+$result[1]);
                                $i--;
                            }
                            return $result[1];
                        }

                        if ($_SERVER["REQUEST_METHOD"]=="POST") {
                            $n = $_POST["user_n"];
                            $nth_fibonacci = Fibonacci($n);
                            echo "<p style='margin: 10px; font-weight: bold;'> Result: $nth_fibonacci </p>";
                        }
                        ?>
                </p>
            </div>

            <div class="card footer">
                <footer style="text-align: center;">Copyright @ Bamidele Oluwatosin</footer>
            </div>
        </div>
    
    </body>
</html>

