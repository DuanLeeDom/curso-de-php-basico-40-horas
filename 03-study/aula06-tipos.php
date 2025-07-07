<><!DOCTYPE html>
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
        |--------------------------------------------------------------------------
        | Consolidação dos Estudos
        |--------------------------------------------------------------------------
        | Este script demonstra o uso de operadores de atribuição, operadores de
        | incremento/decremento e o conceito de variáveis variáveis em PHP.
        */

        /*
        |--------------------------------------------------------------------------
        | Operadores de Atribuição
        |--------------------------------------------------------------------------
        | Estes operadores permitem modificar o valor de uma variável com base
        | em operações aritméticas ou de concatenação.
        |
        | Exemplos:
        | $a = $a + $b   =>   $a += $b
        | $a = $a - $b   =>   $a -= $b
        | $a = $a * $b   =>   $a *= $b
        | $a = $a / $b   =>   $a /= $b
        | $a = $a % $b   =>   $a %= $b
        | $a = $a . $b   =>   $a .= $b   (concatenação de strings)
        */

        /*
        |--------------------------------------------------------------------------
        | Operadores de Incremento e Decremento
        |--------------------------------------------------------------------------
        | Utilizados para adicionar ou subtrair uma unidade ao valor da variável.
        |
        | Pré-incremento:    ++$a  => incrementa antes de usar
        | Pós-incremento:    $a++  => usa, depois incrementa
        | Pré-decremento:    --$a  => decrementa antes de usar
        | Pós-decremento:    $a--  => usa, depois decrementa
        */

        /*
        |--------------------------------------------------------------------------
        | Variáveis Variáveis
        |--------------------------------------------------------------------------
        | PHP permite criar uma variável cujo nome é definido pelo valor de outra.
        |
        | Exemplo:
        */

        $site = "cursoemvideo";
        $$site = "cursoPHP"; // Cria a variável $cursoemvideo

        // Exibindo os valores
        echo $site . "\n";          // Saída: cursoemvideo
        echo $cursoemvideo . "\n";  // Saída: cursoPHP
    ?>
</div>
</body>
</html>