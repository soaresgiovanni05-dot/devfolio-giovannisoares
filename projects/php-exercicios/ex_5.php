<?php

    $livro = "E o vento levou";
    $usuario = "Professor"; 

    if ($usuario == "Professor") {
        echo "Professor: Você tem 10 dias para devolver o livro $livro.";
    } elseif ($usuario == "Aluno") {
        echo "Aluno: Você tem 5 dias para devolver o livro $livro.";
    } else {
        echo "Tipo de usuário inválido.";
    }

?>
