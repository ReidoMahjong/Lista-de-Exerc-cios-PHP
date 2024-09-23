<?php
    include("../cbd.php");

    $_SERVER["REQUEST_METHOD"] == "POST";

    $matri = $_POST['matricula'];
    $carga = $_POST['carga'];

    $sql = "SELECT * FROM cadastro_alunos WHERE matricula = '$matri'";

    $aluno = mysqli_query($conexao, $sql);

    while ($dados = mysqli_fetch_array($aluno)) {
        $id = $dados['id'];
        $ch = $dados['ch'];
    }

    $nch = $ch + $carga;

    $sql = "UPDATE cadastro_alunos SET ch = $nch WHERE id = $id";

    $resultado = mysqli_query($conexao, $sql);

    mysqli_close($conexao);
    header("Location: ../ex_html/exercicio11_final.html");
?>