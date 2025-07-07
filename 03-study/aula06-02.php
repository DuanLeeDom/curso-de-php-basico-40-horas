<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 06</title>
</head>
<body>
<div>
    <?php 
        /*
        | --- [ Exercício 02 ] ---
        | Mostrar qual foi o ano anterior ao
        | ano atual.
         */
    
        // http://localhost/meusProjetos/aulas-guanabara/aula06.php?p=950
        
        $atual = $_GET["aa"]; # Essa linha vai pegar o ano na URL
        echo "O ano atual é $atual e o ano anterior é ". --$atual;
    ?>
</div>
</body>
</html>