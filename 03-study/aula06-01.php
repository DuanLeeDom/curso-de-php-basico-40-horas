<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 06</title>
</head>
<body>
<div>
    <?php 
        /*
        | --- [ Exercício 01 ] ---
        | Aplicar de desconto ao preço
        | de um produto.
         */

        // http://localhost/meusProjetos/aulas-guanabara/aula06.php?p=950
        $preco = $_GET["p"];
        $preco_desc = $_GET["p"];
        echo "O preço do produto é R$ ". number_format($preco, 2, ",", ".");
        $preco = $preco + ($preco * 10 / 100); // $preco += $preco * 10 / 100;
        $preco_desc = $preco - ($preco_desc * 10 / 100); // $preco_desc += $preco_desc * 10 / 100;
        echo "<br/>E o novo preço com 10% de aumento será R$ ". number_format($preco, 2, ",", ".");
        echo "<br/>E o novo preço com 10% de desconto será R$ ". number_format($preco_desc, 2,",", ".");
    ?>
</div>
</body>
</html>