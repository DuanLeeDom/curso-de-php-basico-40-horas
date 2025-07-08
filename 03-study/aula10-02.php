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
        | --- [ Exercício 02 ] ---
        | Ler o dia da semana (2 - 7) e
        | mostrar se precisa ou não ir pra
        | escola.
        */
        $d = isset($_GET["ds"])?$_GET["ds"]:0;
        switch ($d) {
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                echo "Levanta e vai estudar! :)";
                break;
            case 7:
            case 8:
                echo "Descanse, pequeno gafanhoto! ;)";
                break;
            default:
                echo "Dia da semana invalido";
        }


    ?>
    <br/><a href="javascript:history.go(-1)" class="botao">Voltar</a>
</div>
</body>
</html>