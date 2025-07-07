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
        | --- [ Exercício 03 ] ---
        | Vamos praticar o uso de variáveis
        | referenciadas.
         */
        
        $a = 3;
        # $b = &$a; <- referenciando usadno o &
        # $b = $a; <- sem a referencia
        $b = &$a;
        $b += 5;
        echo "A variavel A vale $a";
        echo "<br/>A variavel B vale $b";
    ?>
</div>
</body>
</html>