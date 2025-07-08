<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 10 - Exercício</title>
</head>
<body>
<div>
    <?php
        $es = isset($_GET["estado"]) ? $_GET["estado"] : "";

        switch ($es) {
            // Região Norte
            case 1:
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
            case 7:
                $regiao = "Região Norte";
                break;

            // Região Nordeste
            case 8:
            case 9:
            case 10:
            case 11:
            case 12:
            case 13:
            case 14:
            case 15:
            case 16:
                $regiao = "Região Nordeste";
                break;

            // Região Centro-Oeste
            case 17:
            case 18:
            case 19:
                $regiao = "Região Centro-Oeste";
                break;

            // Região Sudeste
            case 20:
            case 21:
            case 22:
            case 23:
                $regiao = "Região Sudeste";
                break;

            // Região Sul
            case 24:
            case 25:
            case 26:
                $regiao = "Região Sul";
                break;

            // Valor inválido ou não informado
            default:
                $regiao = "uma região desconhecida";
                break;
        }

        echo "Você mora na <span class='foco'>$regiao</span>.";
    ?>
    <a href="aula10-exercicio.html" class="botao">Voltar</a>
</div>
</body>
</html>