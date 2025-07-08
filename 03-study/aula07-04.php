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
        | --- [ Exercício 04 ] ---
        | Mostrar se um eleitor é obrigado a
        | votar ou não.
        */

        # http://localhost/meusProjetos/aulas-guanabara/aula07-04.php?ano_n=2005
        
        $ano = $_GET["ano_n"];
        $idade = date("Y") - $ano;
        echo "Quem nasceu em $ano tem idade de $idade anos.";
        $tipo = ($idade>=18 && $idade<=65)?"OBRIGATORIO":"NÃO OBRIGATORIO";
        echo "<br/>E dessa forma seu voto não é $tipo.";
    ?>
</div>
</body>
</html>