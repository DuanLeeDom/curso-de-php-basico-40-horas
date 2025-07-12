<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 11 - Exercicio</title>
</head>
<body>
<div>
    <?php
    /*
    | --- [ Exercício 03 ] ---
    | Criar um contador personalizável.
    */
    ?>
    <form method="get" action="aula11-exercicio-02.php">
        Inicio: <input type="number" name="ic" value=""  max="100" min=""/><br/>
        Final: <input type="number" name="fn" value=""  max="100" min=""/><br/>
        Incremento: <select type="number" name="num"> 
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</opton>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select><br/> 
        <input type="submit" value="Contar" class="botao">
    </form>
</div>
</body>
</html>