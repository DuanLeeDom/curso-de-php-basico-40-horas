<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 11</title>
</head>
<body>
    <!--
    | --- [ Exercício 02 ] ---
    | Criar dinamicamente 5 caixas de
    | texto em um formulário.
    -->
<div>       
    <form method="get" action="aula11-02-parte2.php">
    <?php 
        $c = 1;
        while ($c <= 5) {
            echo "Valor $c: <input type='number' name='v$c'
                  max='100' min='0' value='0' /><br/>";    
            $c++;
        }
    ?>    
    <input type='submit' value='Enviar' class='botao'/>
    </form>
</div>
</body>
</html>