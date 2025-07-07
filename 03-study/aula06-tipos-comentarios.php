<?php
// Comentário de uma linha (estilo C++)
// Este script demonstra os diferentes tipos de comentários em PHP

# Comentário de uma linha (estilo shell)
# Também pode ser usado, embora seja menos comum

/*
Comentário de múltiplas linhas (bloco)
Este tipo é útil para descrever trechos maiores
ou explicar a lógica de partes mais complexas do código.
*/

// Exemplo de variável
$nome = "Duan";

/**
 * Função que cumprimenta uma pessoa pelo nome.
 *
 * @param string $nome Nome da pessoa a ser saudada.
 * @return void
 */
function cumprimentar($nome) {
    echo "Olá, $nome! Seja bem-vindo.\n";
}

// Chamada da função
cumprimentar($nome);

/*
Abaixo está um exemplo de um pequeno laço que conta de 1 a 3
e demonstra comentários dentro do loop.
*/
for ($i = 1; $i <= 3; $i++) {
    echo "Contando: $i\n"; // Comentário ao lado da instrução
}