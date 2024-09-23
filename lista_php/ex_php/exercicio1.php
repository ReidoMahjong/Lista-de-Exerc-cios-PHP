<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="icon" type="image/x-icon" href="../img/mitsudomoe.png">
</head>
<body>
    <?php

        $num = $_POST['num'];

        if (empty($num) == true) {
            $value = 'Nenhum número foi inserido';
        } else {
            if ($num == 0) {
                $value = 'O número é zero';
            } else {
                if ($num > 0) {
                    $value = 'O número ' . $num . ' é positivo';
                } else {
                    $value = 'O número ' . $num . ' é negativo';
                }
            }
        }
    ?>

    <h1 class="correct">Exercício 1</h1>

    <div id="box">
        <li class="line"><?php echo $value ?></li>
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