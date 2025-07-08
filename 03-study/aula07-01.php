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
        | --- [ Exercício 01 ] ---
        | Permitir que o usuário escolha
        | entre somar e multiplicar dois
        | números.
         */

        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $tipo = $_GET["op"];
        echo "Os valores passados foram $n1 e $n2";
        $r = ($tipo == "s") ? $n1+$n2 : $n1*$n2;
        echo "<br/>O resultado será $r";
    ?>
</div>
</body>
</html>