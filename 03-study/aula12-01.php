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
    /*
    | --- [ Exercício 01 ] ---
    | Mostrar uma contagem progressiva
    | de 1 até 10.
    */

    echo "Crescente: ";

    $c = 0;
    do {
        echo"$c ";
        $c++;   
    } while ($c <= 10);

    echo "<br/>Decrescente: ";

    $c = 10;
    do {
        echo "$c ";
        $c--;
    } while ($c >= 0); 
    ?>
</div>
</body>
</html>