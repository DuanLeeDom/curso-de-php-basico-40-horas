<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 05</title>
</head>
<body>
<div>
    <?php
        // tem que colocar lá na url do navegador como: ? a=10&b=30
        // http://localhost/meusProjetos/aulas-guanabara/aula05-02.php?a=10&b=30

        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        echo "<h2>Valores recebidos: $n1 e $n2</h2>";
        $m = ($n1+$n2)/2;
        echo "A soma vale ". ($n1+$n2);
        echo "<br/>A subtração vale ". ($n1-$n2);
        echo "<br/>A multiplicação vale ". ($n1*$n2);
        echo "<br/>A divisão vale ". ($n1/$n2);
        echo "<br/>O módulo vale ". ($n1%$n2);
        echo "<br/>A média vale $m";
    ?>
</div>  
</body>
</html>