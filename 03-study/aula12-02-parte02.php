<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 12</title>
</head>
<body>
<div>
    <?php
        // Exemplo: 5! = 5 × 4 × 3 × 2 × 1 = 120

        $valor = isset($_GET["val"]) ? (int) $_GET["val"] : 0;

        echo "<h1>Calculando o fatorial de {$valor}!</h1>";

        $fat = 1;
        $contador = $valor;

        if ($valor == 0 || $valor == 1) {
            $fat = 1;
        } else {
            do {
                $fat *= $contador;
                $contador--;
            } while ($contador > 1);
        }

        echo "<p>{$valor}! = {$fat}</p>";
    ?>
    <a href="aula12-02-parte01.html" class="botao">Voltar</a>   
</div>
</body>
</html>