<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 16 & Aula 17</title>
</head>
<body>
<div>
    <?php
        # 1. Função printf
        function part_01() {
            $prod = "leite";
            $preco = 4.5;
            // echo "O $prod está custando R$ ". number_format($preco, "2"). "<br/>";
            printf("O %s está custando R$ %.2f", $prod, $preco);

            // %d | valor decimal (positivo ou negativo)
            // %u | valor decimal sem sinal (apenas positivos)
            // %f | valor real
            // %s | string
        }

        # 2. Função print_r
        function part_02() {
            $v[0] = 4;
            $v[1] = 8;
            $v[2] = 3;
            // print_r($v);
            $v2 = array (3,7,6,2,1,9);
            echo print_r($v2). "<br/>";
            echo var_dump($v2). "<br/>";
            echo var_export($v2). "<br/>";
        }

        # 3. Função wordwarp
        function part_03() {
            $txt = "Aqui temos um texto gigante criado pelo PHP e vai mostrar o funcionamento da função wordwrap";
            $res = wordwrap($txt, 20, "<br/>\n", false);
            echo($res);
        }

        # 4. Função strlen
        function part_04() {
            $txt = "Curso em Vídeo";
            $tamanho = strlen($txt); # 14 letras
        }

        # 5. Função trim
        function part_05() {
            $nome = "   José da Silva   ";
            echo(strlen($nome));
            $novo = trim($nome);
            echo($nome);
            echo(strlen($novo));
        }

        # 6. Função ltrim
        function part_06() {
            $nome = "   José da Silva   ";
            echo(strlen($nome));
            $novo = ltrim($nome);
            echo($novo);
            echo(strlen($novo)); #JoséxdaSilvaxxx
        }
        
        # 7. Função rtrim
        function part_07() {
            $nome = "   José da Silva   ";
            echo(strlen($nome));
            $novo = rtrim($nome);
            echo($novo); #xxxJoséxdaSilva
        }

        # 8. Função str_word_count
        function part_08() {
            $frase = "Eu vou estudar PHP";
            $cont = str_word_count($frase, 2); # 0 => conta as palavras | 1 => cria um vetor
            // print($cont);
            print_r($cont);
        }

        # 9. Função explode
        function part_09() {
            $site = "Curso em Vídeo";
            $vetor = explode(" ", $site);
            print_r($vetor);
        }

        # 10. Função str_split 
        function part_10() {
            $nome = "Maria";
            $vetor = str_split($nome);
            print_r($vetor);
        }

        # 11. Função implode
        function part_11() {
            $vetor[0] = "Curso";
            $vetor[1] = "em";
            $vetor[2] = "Vídeo";
            $texto = implode("#", $vetor);
            print($texto); # Curso#em#Vídeo
        }

        # 12. Função chr
        function part_12() {
            $codigo = 67;
            $letra = chr($codigo);
            echo "A letra de código $codigo é $letra";
        }

        # 13. Função ord
        function part_13() {
            $letra = "C";
            $cod = ord($letra);
            print("A letra $letra tem código $cod");
        }

        # 14. Função strtolower
        function part_14() {
            $nome = "Gustavo Guanabara";
            print("Seu nome é ". strtolower($nome));
        }

        # 15. Função strtoupper
        function part_15() {
            $nome = "Gustavo Guanabara";
            print("Seu nome é ". strtoupper($nome));
        }

        # 16. Função ucfirst
        function part_16() {
            $nome = "gustavo guanabara";
            $nome2 = ucfirst($nome);
            print("Seu nome é $nome2");
        }

        # 17. Função ucwords
        function part_17() {
            $nome = "gustavo guanabara";
            print("Seu nome é ". ucwords($nome));
        }

        # 18. Função strrev
        function part_18() {
            $nome = "gustavo guanabara";
            print(strrev($nome));
        }

        # 19. Função strpos
        function part_19() {
            $frase = "Estou aprendendo PHP";
            $pos = strpos($frase, "PHP");
            echo "$frase <br/> A string foi econtrada na posição $pos";
        }

        # 20. Função stripos
        function part_20() {
            $frase = "Estou aprendendo PHP";
            $pos = stripos($frase, "php");
            print("Encontrado na posição $pos");
        }

        # 21. Função substr_count
        function part_21() {
            $frase = "Estou aprendendo PHP no Curso em Vídeo de PHP";
            $cont = substr_count($frase, "PHP");
            print("PHP encontrado $cont vezes");
        }

        # 22. Função substr
        function part_22() {
            $site = "Curso em Vídeo";
            $sub = substr($site, 0, 5);
            echo "$sub ";
            print(substr($site, 9, 5));
        }

        # 23. Função str_pad 
        function part_23() {
            $nome = "Guanabara";
            $novo = str_pad($nome, 30, " ", STR_PAD_RIGHT); # STR_PAD_RIGHT | STR_PAD_CENTER | STR_PAD_LEFT
            print("Meu professor $nome é legal!");
        }

        # 24. Função str_repeat
        function part_25() {
            $txt = str_repeat("Php", 5);
            print("O texto gerado foi $txt");
            print(str_repeat("-",20));
        }

        # 25. Função str_replace
        function part_26() {
            $frase = "Gosto de estudar Matemática!!!";
            $novaFrase = str_replace("Matemática", "PHP", $frase); # | i de ignore | str_ireplace
            print($novaFrase);
        }
    ?>    
</div>
</body>
</html>