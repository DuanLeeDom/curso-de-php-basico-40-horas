<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 05</title>
    <style>
        body {
            font: 15pt Arial;
            color: #171559;
            font-weight: bold;
        }
    </style>
</head>
<body>
<div>
    <?php
        $v1 = $_GET["x"];
        $v2 = $_GET["y"];
        echo "<h2>Valores recebidos: $v1 e $v2</h2>";
        echo "O valor absoluto de $v2 é ". abs($v2);
        echo "<br/>O valor $v1<sup>$v2</sup> é ". pow($v1, $v2);
        echo "<br/>A raiz quadrada de $v2 é ". sqrt($v2);
        echo "<br/>O valor de $v2 arrendondado é ". round($v2); // ceil() e floor() para arredondamentos para cima e para baixo, respectivamente.
        echo "<br/>A parte inteira de $v2 é ". intval($v2);
        echo "<br/>O valor de $v1 em moeda é ". number_format($v1, 2, ",", "."); // as decimais e separações
    ?>
</div>  
</body>
</html>