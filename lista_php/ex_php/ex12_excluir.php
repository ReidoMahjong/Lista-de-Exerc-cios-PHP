<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 12</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="icon" type="image/x-icon" href="../img/mitsudomoe.png">
</head>
<body>
    <h1 class="correct">Exercício 12</h1>

    <div id="box">
        <li class="line">
            <?php   

                include("../cbd.php");

                $_SERVER["REQUEST_METHOD"] == "POST";

                $id = $_POST['excluir'];

                $sql = "DELETE FROM cadastro_alunos WHERE id = $id";

                $excluir = mysqli_query($conexao, $sql);

                mysqli_close($conexao);

                echo 'Registro do Aluno excluído com sucesso';
                
            ?>
        </li>
        <br>
        <a class="line" href="../index.html"><li>Retornar a página inicial</li></a>
    </div>

    <div id="botoes">
        <button onclick="vol_f()" type="button">
            <img id= "vol_b" src="../img/mute.png">
        </button>
        <button onclick="p_f()" type="button">
            <img id="p_b" src="../img/play.png">
        </button>
    </div>

    <audio id="lofi_back" loop muted>
        <source src="../music/lofi_backround_music.mp3" type="audio/mpeg">
    </audio>
    <script src="../music.js"></script>
</body>
</html>