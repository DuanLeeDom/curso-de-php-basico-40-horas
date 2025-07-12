<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 13 - Exercício</title>
</head>
<body>
<div>
    <?php
        $n = isset($_GET["num"])?$_GET["num"]:0;
        $cm = 0;

        echo "<h2>Analisando o número $n...</h2><br/>";
        echo "Valores múltiplos: ";
        for ($c = 1; $c <= $n; $c++) {
            if ($n % $c == 0) {
                echo "$c ";
                $cm += 1;
                $c++;
            }
        }

        echo "<br/>Total de múltiplos: $cm";

        # verificar se o número é primo ou não
        if ($cm == 2) {
            $pr = "É PRIMO";
        } else {
            $pr = "NÃO É PRIMO";
        }
        echo "<br/>Resultado: <span class='foco'>$pr</span>"; #<span class='texto'>$txt</span>";
    ?> <br/> <br/>
    <a href="aula13-exercicio-01.php" class="botao">Voltar</a>
</div>
</body>
</html>