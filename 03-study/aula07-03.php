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
        | --- [ Exercício 03 ] ---
        | Mostrar a situação de um aluno, de
        | acordo com a sua média obtida. 
        */

        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $m = ($nota1 + $nota2) / 2;
        echo "A média entre $nota1 e $nota2 é $m <br/>";
        # $sit = ($m<6) ? "REPROVADO" : "APROVADO";
        # echo "A situação do aluno é $sit";
        echo "A situação do aluno é ". ($m <6)?"REPROVADO":"APROVADO";
    ?>
</div>
</body>
</html>