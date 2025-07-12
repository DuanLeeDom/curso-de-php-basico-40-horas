<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 13</title>
</head>
<body>
<div>
    <?php
        /*
        | --- [ Exercício 02 ] ---
        | Exibir a tabuada de um número
        | escolhido pelo usuário, de a 10.
        */
    ?>
    <form method="get" action="aula13-02-parte02.php">
        <select name="num">
            <?php
                for ($c = 1; $c<=10; $c++) {
                    echo "<option>$c</option>";
                }
            ?>   
        </select>
        <input type="submit" value="Tabuada" class="botao"/>
    </form>
</div>
</body>
</html>