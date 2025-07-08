<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 07</title>
</head>
<body>
<div>
    <?php 
        /*
        | --- [ Exercício 02 ] ---
         */

        $a = 3;
        $b = "3";
        # $r = ($a == $b)?"SIM":"NÃO"; // se os elementos são semelhantes
        $r = ($a === $b)?"SIM":"NÃO"; // se os elemensto são realmente identicos
        echo "Variavel a= $a e b= $b";
        echo "<br/>As variaveis A e B são iguais? $r";
    ?>
</div>
</body>
</html>