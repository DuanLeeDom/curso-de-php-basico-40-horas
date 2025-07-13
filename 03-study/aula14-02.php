<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 14</title>
</head>
<body>
<div>
    <?php
        /*
        | --- [ Exercício 02 ] ---
        | Criar uma função que some dois
        | valores numéricos inteiros.
        */    

        function soma ($a, $b) {
            // $s = $a + $b;
            return $a+$b;
        }

        $x = 3;
        $y = 8;
        $r = soma($x, $y);
        echo "A soma entre $x e $y é igual a $r";
    ?>
</div>
</body>
</html>