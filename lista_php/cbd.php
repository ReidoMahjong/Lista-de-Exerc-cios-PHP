<?php

    $servidor="localhost";
    $usuario="root";
    $senha="";
    $dbname="Ex11_cadastro";

    $conexao=mysqli_connect($servidor, $usuario, $senha, $dbname);
    if (!$conexao) {
        die("Ouve um erro, lamentamos pelo incoveniente :(");
    }

?>