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
        | --- [ Exercício 03 ] ---
        | Realização de média de aprovação por nota.
        */
        $nota1 = isset($_GET["n1"])?$_GET["n1"]:"0";
        $nota2 = isset($_GET["n2"])?$_GET["n2"]:"0";
        $media = (($nota1 + $nota2)/2);

        echo "A média entre <span class='foco'>". number_format($nota1, 1). "</span> e <span class='foco'>". number_format($nota2, 1). "</span> é igual a <span class='foco'>". number_format($media, 1), "</span> <br/>";
        
        if ($media >= 0 && $media <= 5) {
            $sit = "<span class='foco'>REPROVADO</span>";
        } elseif ($media >= 5 && $media < 7) {
            $sit = "<span class='foco'>RECUPERAÇÃO</span>";
        } else {
            $sit = "<span class='foco'>APROVADO</span>";
        }

        echo "Situação do aluno: ". $sit;
        
    ?>
    <a href="aula09-exercicio.html" class="botao">Voltar</a>
</div>
</body>
</html>