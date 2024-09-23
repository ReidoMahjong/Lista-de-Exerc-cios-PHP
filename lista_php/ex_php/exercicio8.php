<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 8</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="icon" type="image/x-icon" href="../img/mitsudomoe.png">
</head>
<body>
    <h1 class="correct">Exercício 8</h1>

    <div id="box">
        <li class="line">
            <?php
                $n1 = 2 * $_POST['n1'];
                $n2 = 2 * $_POST['n2'];
                $n3 = $_POST['n3'];

                $notas = array($n1, $n2, $n3);
                $soma = 0;
                $media = 0;

                for ($i = 0; $i < 3; $i++) {
                    $soma = $notas[$i] + $soma;
                    if ($i == 2) {
                        $media = $soma/5;
                        if ($media < 7) {
                            echo 'Média ' . $media . ', o aluno está REPROVADO';
                        } else {
                            echo 'Média ' . $media . ', o aluno está APROVADO';
                        }
                    }
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

    <audio id="lofi_back" loop muted>
        <source src="../music/lofi_backround_music.mp3" type="audio/mpeg">
    </audio>
    <script src="../music.js"></script>
</body>
</html>