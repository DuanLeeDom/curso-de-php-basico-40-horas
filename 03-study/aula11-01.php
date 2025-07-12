<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 11</title>
</head>
<body>
<div>   
    <?php
    /*
    | --- [ Exercício 01 ] ---
    | Mostrar uma contagem progressiva
    | de 1 até
    */

    echo "Enquanto 1 a 10: ";

    # modelo do | While
    $c = 1;
    while ($c <= 10) {
        echo $c;
        $c += 1; # $c++; | $c += 1; | $c = $c + 1; 
    }

    // echo "<br/> Até 1 a 10: ";

    // # modelo do | do while
    // $c = 1;
    // do {
    //     echo $c;
    //     $c++;
    // } while ($c <= 10);


    # modelo de negativo 

    echo "<br/> Enquanto 10 a 1: ";

    $c = 10;
    while ($c >= 1) {
        echo $c;
        $c--; # $c -= 1; | $c = $c - 1; | $c--;
    }

    ?>
</div>
</body>
</html>