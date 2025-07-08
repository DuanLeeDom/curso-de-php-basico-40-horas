<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 08</title>
</head>
<body>
<div>
    <?php 
        /*
        | --- [ Exercício 01 ] ---
        | Ler um valor e mostrar sua raiz
        | quadrada.
        */

        $valor = $_GET["v"];
        $rq = sqrt($valor);
        echo "A raiz de $valor é igual a ". number_format($rq, 2);
    ?>
    <a href="aula08-01.html">Voltar</a>
</div>
</body>
</html>