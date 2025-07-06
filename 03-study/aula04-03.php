<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 04</title>
</head>
<body>
<div>
    <?php 
        $nome = "Gustavo Guanabara";
        $idade = 36;
        // echo $nome. " tem ". $idade. " anos."; // Concatenação 
        echo "$nome tem $idade anos! <br>"; // Interpreta variáveis dentro de aspas duplas
        echo '$nome tem $idade anos!'; // String literal, não interpreta variáveis
    ?>
</div>
</body>
</html>