<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 11</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="icon" type="image/x-icon" href="../img/mitsudomoe.png">
</head>
<body>
    <h1 class="correct">Exercício 11</h1>

    <div id="box">
        <li class="line">
            <?php
                include("../cbd.php");

                $_SERVER["REQUEST_METHOD"] == "POST";
            
                $nome = $_POST['nome'];
                $matricula = $_POST['matricula'];
                $curso = $_POST['curso'];
                $email = $_POST['email'];
                $telefone = $_POST['telefone'];
                $endereco = $_POST['endereco'];
                $cep = $_POST['cep'];
                $cidade = $_POST['cidade'];
                $uf = $_POST['uf'];
                $hc = $_POST['hc'];
                $ch = $_POST['ch'];
            
                $sql = "INSERT INTO cadastro_alunos (nome, matricula, curso, email, telefone, cep, endereco, cidade, uf, hc, ch) VALUES ('$nome', '$matricula', '$curso', '$email', '$telefone', 'cep', '$endereco', '$cidade', '$uf', '$hc', '$ch')"; 
            
                if (mysqli_query($conexao, $sql)) {
                    echo "Cadastro realizado com sucesso";
                } 
                else {
                    echo "Ouve um erro, lamentamos pelo incoveniente :( :(";
                }
            
                mysqli_close($conexao);
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