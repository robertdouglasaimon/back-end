<?php
/* ------------------Estruturas Condicionais no PHP ----------------------
O que é uma condicional?
Uma estrutura de controle que permite executar um conjunto de instruções. 

Funções condicionais:
- if
- else
- elseif
- switch

IF - CONDICIONAL SIMPLES
Condicional "if": Essa condicional verifica se uma condição eh verdadeira ou falsa.

if (condicao) {
    // Instrucoes a serem executadas se a condição for verdadeira
}

ELSE - CONDICIONAL SIMPLES
Condicional "else": Essa condicional verifica se uma condição eh verdadeira ou falsa.

if (condicao) {
    // Instrucoes a serem executadas se a condição for verdadeira
} else {
    // Instrucoes a serem executadas se a condição for falsa
}

ELSEIF - CONDICIONAL SIMPLES
Condicional "elseif": Essa condicional verifica se uma condição eh verdadeira ou falsa.

if (condicao1) {
    // Instrucoes a serem executadas se a condição for verdadeira
} elseif (condicao2) {
    // Instrucoes a serem executadas se a condição for verdadeira
} else {
    // Instrucoes a serem executadas se as condições forem falsas
}


SWITCH - CONDICIONAL SIMPLES
Condicional "switch": Essa condicional verifica se uma condição eh verdadeira ou falsa.

switch (variavel) {
    case valor1:
        // Instrucoes a serem executadas se a condição for verdadeira
        break;
    case valor2:
        // Instrucoes a serem executadas se a condição for verdadeira
        break;
    default:
        // Instrucoes a serem executadas se as condições forem falsas
        break;
}
*/
// ----------------------------------------- //

// Estruturas Condicionais
$nome = 'Matheus';
if($nome == 'Robert') {
    echo 'Esse é o meu nome!';
    echo '<br>';
    echo'<br>';
} else {
    echo 'Quem é essa pessoa?';
    echo '<br>';
    echo'<br>';
}
'<br>';
'<br>';
'<br>';
// Operadores de Comparação
// == : Igual
// != : Diferente
// > : Maior que
// < : Menor que
// >= : Maior ou igual a
// <= : Menor ou igual a

// Operadores Lógicos
// && : E
// || : Ou
// ! : Nao

// Praticando
$idade = 18;
$temCNH = true;

if($idade >= 18 && $temCNH) {
    echo 'Está habilitado, pode dirigir!';
} else {
    echo 'Menor de idade ou não habilitado, não pode dirigir!';
};

?>