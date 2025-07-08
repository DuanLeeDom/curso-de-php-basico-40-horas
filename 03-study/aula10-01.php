<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 10</title>
</head>
<body>
<div>
    <?php
        /*
        | --- [ Exercício 01 ] ---
        | Ler um número e qual operação
        | realizar: dobro, cubo ou raiz
        | quadrada.
        */

        $n = isset($_GET["num"])?$_GET["num"]:0;
        $o = isset($_GET["oper"])?$_GET["oper"]:1;
        switch ($o) {
            case 1:
                $r = $n * 2;
                $esc = "Dobro";
                break;  
            case 2:
                $r = $n ^ 3;
                $esc = "Cubo";
                break;
            case 3:
                $r = sqrt($n); // $n ^ (1/2);
                $esc = "Raiz Quadrada";
        }

        echo "Número: <span class='foco'>$n</span> <br/>";
        echo "Operação: <span class='foco'>$esc</span> <br/>";
        echo "Resultado: <span class='foco'>$r</span> <br/>";
        echo "O resultado de <span class='foco'>$n</span> com <span class='foco'>$esc</span> deu <span class='foco'>$r</span>. <br/>";
    ?>
    <a href="aula10-01.html" class="botao">Voltar</a>
</div>
</body>
</html>