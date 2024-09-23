<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="icon" type="image/x-icon" href="../img/mitsudomoe.png">
</head>
<body>

    <h1 class="correct">Exercício 2</h1>

    <?php

        $num = $_POST['num'];

    ?>

    <div id="box">
        <li class="line"><?php echo $num . ' x 1 = ' . $num*1 ?></li>
        <li class="line"><?php echo $num . ' x 2 = ' . $num*2 ?></li>
        <li class="line"><?php echo $num . ' x 3 = ' . $num*3 ?></li>
        <li class="line"><?php echo $num . ' x 4 = ' . $num*4 ?></li>
        <li class="line"><?php echo $num . ' x 5 = ' . $num*5 ?></li>
        <li class="line"><?php echo $num . ' x 6 = ' . $num*6 ?></li>
        <li class="line"><?php echo $num . ' x 7 = ' . $num*7 ?></li>
        <li class="line"><?php echo $num . ' x 8 = ' . $num*8 ?></li>
        <li class="line"><?php echo $num . ' x 9 = ' . $num*9 ?></li>
        <li class="line"><?php echo $num . ' x 10 = ' . $num*10 ?></li>

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