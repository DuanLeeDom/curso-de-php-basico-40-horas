<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 11 - Exercicio</title>
</head>
<body>
<div>
    <?php
    /*
    | --- [ Exercício 03 ] ---
    | Criar um contador personalizável.
    */
    $ic = isset($_GET["ic"]) ? $_GET["ic"] : 0; #Inicio | ic
    $fn = isset($_GET["fn"]) ? $_GET["fn"] : 0; #Final | fn
    $c = isset($_GET["num"]) ? $_GET["num"] : 0; #Incremento | c como contador
    $inicio = $ic;

    echo "Os numeros escolhidos foram esses: <br/>";
    echo "Inicio: $ic <br/>";
    echo "Final: $fn <br/>";
    echo "Incremento: $c <br/>";


    if ($ic < $fn) {
        echo "Positivo: ";
        while ($ic < $fn) {
            if ($ic == $inicio) {
                echo"$ic ";
            } else {
                echo "$ic ";
            }
            $ic += $c;
            if ($ic == $fn) {
                echo "$ic";
            } 
        }
    } elseif ($ic > $fn) {
        echo "Negativo: ";
        while ($ic > $fn) {
            if ($ic == $inicio) {
                echo "$ic ";
            } else {
                echo "$ic ";
            }
            $ic -= $c;
            if ($ic == $fn) {
                echo "$ic";
            }
        }
    } else {
        echo "Os numeros são iguais.";
    }
    ?> <br/>
    <a href="aula11-exercicio-01.php" class="botao">Voltar</a>
</div>
</body>
</html>