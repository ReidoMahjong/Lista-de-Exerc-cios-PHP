<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 9</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="icon" type="image/x-icon" href="../img/mitsudomoe.png">
</head>
<body>
    <h1 class="correct">Exercício 9</h1>

    <div id="box">
        <li class="line">
            <?php

                $nome = $_POST['nome'];
                $idade = $_POST['idade'];

                if ($idade < 18) {
                    echo $nome . ' não é maior e tem ' . $idade . 'anos';
                } else {
                    echo $nome . ' é maior e tem ' . $idade . ' anos';
                }
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
    <script src="../music.js"></script>
</body>
</html>