<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeiro exemplo PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            text-align: center;
        }
        h1 {
            color: blue;
        }
        h2 {
            color: #555;
        }
    </style>
</head>
<body>
<div>
    <h1>Testando o PHP</h1>
    <?php 
        $user = "Usuario";
        echo "Seja bem-vindo, $user!";
        echo "<h2> Olá,  </br> mundo!</h2>";
    ?>
</div>
</body>
</html>