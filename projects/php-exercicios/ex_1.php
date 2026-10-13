<?php

    $aluno = "McLovin ";
    
    $nota_1 = 0;
    $nota_2 = 10;

    $media = ($nota_1 + $nota_2) / 2;

    if ($media >= 6) {
        $situação = "Aprovado ";
    } else {
        $situação = "Reprovado ";
    }

    echo "Aluno: " . $aluno;
    echo "media: " . $media;
    echo "O aluno está " . $situação;

?>