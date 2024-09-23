<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="icon" type="image/x-icon" href="../img/mitsudomoe.png">
</head>
<body>
    <h1 class="correct">Exercício 3</h1>

    <div id="box">
        <li class="line">
            <?php 

                $num = $_POST['num'];
                $fat = $num;

                if ($num == 0) {
                    echo 'Fatorial de 0 é 1';
                } else {
                    if ($num < 0) {
                        echo 'Não existe fatorial de um número negativo';
                    } else {
                        while ($num > 0) {
                            if ($num > 1) {
                                echo $num . ' x ';
                                $num--;
                                $fat = $num * $fat;
                            } else {
                                echo ' ' . $num . ' = ' . $fat;
                                $num--;
                            }
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