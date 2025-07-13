<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 15</title>
</head>
<body>
<div>
    <?php
        /*
        | --- [ Exercício 01 ] ---
        | Criar um procedimento que use a
        | passagem de parâmetros por
        | referência.
        */

        function teste (&$x) {
            $x += 2;
            echo "O valor de x é $x";
        }

        $a = 3;
        teste($a);
        echo "<p>O valor de A é $a</p>";
    ?>
</div>
</body>
</html>