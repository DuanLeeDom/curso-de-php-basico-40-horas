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
        /*
        | --- [ Exercício 01 ] ---
        | Mostrar várias contagens utilizando
        | a estrutura for.
        */

        for ($i = 1; $i <= 10; $i++) {
            echo "$i ";
        }
        echo "<br/>";
        for ($i = 10; $i >= 1; $i--) {
            echo "$i ";
        }
        echo "<br/>";
        for ($i = 0; $i <= 50; $i+=5) {
            echo "$i ";
        }
        echo "<br/>";
        for ($i = 30; $i >= 0; $i-=2) {
            print "$i ";
        }
    ?>
</div>
</body>
</html>