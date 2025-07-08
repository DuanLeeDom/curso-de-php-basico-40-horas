<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 08</title>
</head>
<body>
<div>
    <?php
        /*
        | --- [ Exercício 02 ] ---
        | Ler nome, ano de nascimento e
        | sexo de uma pessoa, mostrando
        | sua idade atual.
        */
      
        $nome = isset($_GET["nome"])?$_GET["nome"]:"[Não informado!]";
        $ano = isset($_GET["ano"])?$_GET["ano"]:0;
        $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[sem sexo]";
        $idade = date("Y") - $ano;
        echo "$nome é de sexo $sexo e tem $idade anos.";  
    ?>
    <a href="aula08-02.html">Voltar</a>
</div>
</body>
</html>