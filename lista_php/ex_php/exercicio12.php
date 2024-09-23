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
            <?php
                include("../cbd.php");

                $_SERVER["REQUEST_METHOD"] == "POST";

                if (isset($_POST['nome'])) {
                    $search = $_POST['nome'];
                    $tipo = 'nome';
                }
                if (isset($_POST['matricula'])) {
                    $search = $_POST['matricula'];
                    $tipo = 'matricula';
                }
                if (isset($_POST['email'])) {
                    $search = $_POST['email'];
                    $tipo = 'email';
                }
            
                $sql = "SELECT * FROM cadastro_alunos WHERE $tipo = '$search'";
            
                $aluno = mysqli_query($conexao, $sql);
            
                while ($dados = mysqli_fetch_array($aluno)) {
                    $id = $dados['id'];
                    $nome = $dados['nome'];
                    $matricula = $dados['matricula'];
                    $curso = $dados['curso'];
                    $email = $dados['email'];
                    $telefone = $dados['telefone'];
                    $endereco = $dados['endereco'];
                    $cep = $dados['cep'];
                    $cidade = $dados['cidade'];
                    $uf = $dados['uf'];
                    $hc = $dados['hc'];
                    $ch = $dados['ch'];
                }

                echo '<li class="line">Nome: ' . $nome . '</li>';
                echo '<li class="line">Matricula: ' . $matricula . '</li>';
                echo '<li class="line">Curso: ' . $curso . '</li>';
                echo '<li class="line">Email: ' . $email . '</li>';
                echo '<li class="line">Telefone: ' . $telefone . '</li>';
                echo '<li class="line">Endereço: ' . $endereco . '</li>';
                echo '<li class="line">CEP: ' . $cep . '</li>';
                echo '<li class="line">Cidade: ' . $cidade . '</li>';
                echo '<li class="line">UF: ' . $uf . '</li>';
                echo '<li class="line">Curso para horas complementares: ' . $hc . '</li>';
                echo '<li class="line">Carga Horária: ' . $ch . '</li>';

                echo '<form method="post" action="../ex_php/ex12_excluir.php">';
                echo '<button id="excluir" type="submit" class="send" name="excluir" value="' . htmlspecialchars($id) . '">Excluir Cadastro</button>';
                echo '</form>';
            
                mysqli_close($conexao);
            ?>
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