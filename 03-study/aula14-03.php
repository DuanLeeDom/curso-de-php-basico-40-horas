<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 14</title>
</head>
<body>
<div>
    <?php
        /*
        | --- [ Exercício 03 ] ---
        | Realizar uma soma com múltiplos
        | parâmetros.
        */    

        function soma() {
            $p = func_get_args();
            $t = func_num_args();
            $s = 0;
            for ($i = 0; $i < $t; $i++) {
                $s += $p[$i];
            }
            return $s;
        }

        $r = soma(3, 5, 2, 8, 9, 4);
        echo "A soma dos valores é $r";
    ?>
</div>
</body>
</html>