<?php

    $num1 = 10;
    $num2 = 30;

    if ($num1 > $num2) {
        $temp = $num1;
        $num1 = $num2;
        $num2 = $temp;
    }

    for ($i = $num1; $i <= $num2; $i++) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
    }
?>
