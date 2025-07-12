<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 13</title>
</head>
<body>
<div>
    <?php
        $n = isset($_GET["num"])?$_GET["num"]:1; # valor ternario
        for ($c = 1; $c <= 10; $c++) {
            $r = $n * $c;
            echo "$n x $c = $r <br/>";
        }
    ?>
    <br/><a href='aula13-02-parte01.php' class='botao'>Voltar</a>
</div>
</body>
</html>