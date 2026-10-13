<?php

    $lado_A = 5;
    $lado_B = 5;
    $lado_C = 5;

    if (
        $lado_A + $lado_B > $lado_C &&
        $lado_A + $lado_C > $lado_B &&
        $lado_B + $lado_C > $lado_A
    ) {

        if ($lado_A == $lado_B && $lado_A == $lado_C) {
            echo "Triângulo Equilátero";
        } elseif ($lado_A == $lado_B || $lado_A == $lado_C || $lado_B == $lado_C) {
            echo "Triângulo Isósceles";
        } else {
            echo "Triângulo Escaleno";
        }

    } else {
        echo "Os valores informados não formam um triângulo.";
    }

?>
