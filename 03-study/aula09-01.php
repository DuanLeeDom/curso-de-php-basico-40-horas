<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 09</title>
</head>
<body>
<div>
    <?php
        /*
        | --- [ Exercício 01 ] ---
        | Ler o ano de nascimento de uma
        | pessoa e mostrar se ela pode votar
        | e dirigir.
        */

        $a = isset($_GET["ano"])?$_GET["ano"]:1900;
        $i = date("Y") - $a;
        echo "Você nasceu em $a e terá $i anos. <br/>";
        if ($i >= 18) {
            $v = "já pode votar";
            $d = "já pode dirigir";
        } else {
            $v = "não pode votar";
            $d = "não pode dirigir";
        }
        echo "Com essa idade você $v e também $d.";
    ?>
    <a href="aula09-01.html" class="botao">Voltar</a>
</div>
</body>
</html>