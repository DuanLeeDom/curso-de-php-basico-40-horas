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
        | --- [ Exercício 02 ] ---
        | No exercício anterior, considerar o
        | voto opcional.
        */

        $a = isset($_GET["ano"])?$_GET["ano"]:1900;
        $i = date("Y") - $a;
        echo "Você nasceu em $a e terá $i anos. <br/>";
        if ($i < 16) {
            $tipoVoto = "não vota";
        } elseif (($i >= 16 && $i <= 18) || ($i > 65)) {
            $tipoVoto = "voto opcional";
        } else {
            $tipoVoto = "voto obrigatorio";
        }
        echo "Para essa idade, $tipoVoto.";
    ?>
    <a href="aula09-02.html" class="botao">Voltar</a>
</div>
</body>
</html>