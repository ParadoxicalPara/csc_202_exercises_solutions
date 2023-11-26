<?php
    //A program to find the average of three numbers.
    function average() {
        $sum = 0;
        for ($i=0; $i<func_num_args(); $i++) {
            $sum += func_get_arg($i);
        }
        return $sum/func_num_args();
    }

    function main() {
        $num1 = 5;
        $num2 = 7;
        $num3 = 3;
        
        echo "<h1> The average of $num1, $num2, $num3 is: </h2>";
        echo average($num1, $num2, $num3);
    }
    main();
?>
    