<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 12 - Exercício</title>
</head>
<body>
<div>
    <form method="get" action="aula12-exercicio-02.php">
        <label for="val">Número: </label>
        <select id="val" name="val">
            <?php
                do {
                    $c++;
                    echo "<option value='$c'>$c</option>";
                } while ($c < 10);
            ?>
        </select>
        <input type="submit" value="Tabuada" class="botao"/>
    </form>
</div>
</body>
</html>
