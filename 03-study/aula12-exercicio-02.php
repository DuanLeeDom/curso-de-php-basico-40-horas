<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 12 - Exercício</title>
</head>
<body>
<div>
    <?php
        /*
        | --- [ Exercício 03 ] ---
        | Exibir a tabuada de um número
        | escolhido pelo usuário, de 1 a 10.
        */

        $v = isset($_GET["val"]) ? (int) $_GET["val"] : 1;
        $c = 1;

        echo "<h2>Mostrando a Tabuada de $v</h2>";

        do {
            $res = $v * $c;
            echo "$v × $c = $res <br/>";    
            $c++;
        } while ($c <= 10);
    ?><br/>
    <a href="aula12-exercicio-01.php" class="botao">Voltar</a>
</div>
</body>
</html>