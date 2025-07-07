<?php
/* ------------------Tipos Primitivos no PHP ----------------------
    String: Representa uma cadeia de caracteres no geral (texto). Exemplo: "Olá, Mundo!" ou 'Olá, Mundo!'
    Integer: Representa um número inteiro. Exemplo: 42
    Float: Representa um número de ponto flutuante. Exemplo: 3.14
    Boolean (Double): Representa um valor lógico (true ou false). Exemplo: true
    Array: Representa uma coleção de elementos. Exemplo: [1, 2, 3]
    Object: Representa um objeto. Exemplo: new Pessoa("João", 30)
    Null: Representa um valor nulo. Exemplo: null
    Resource: Representa um recurso externo. Exemplo: fopen("arquivo.txt", "r")

*/

// Exemplo de Números Float no PHP

// float - Converte o valor para número de ponto flutuante .

// Exemplo de float:
$altura = 1.95;

$numero1 = 1.2;
$numero2 = 2.3;

echo 'Multiplicação: '.($numero1 * $numero2);
echo '<br/>';
echo 'Divisão: '.($numero1 / $numero2);
echo '<br/>';
echo 'Subtração: '.($numero1 - $numero2);
echo '<br/>';
echo 'Adição: '.($numero1 + $numero2);
echo '<br/>';

// Funções Matemáticas no PHP	
// Arrendondamento - round()

$numero3 = 2.50;
$numeroArredondado = round($numero3);
$numeroArredondadoCima = ceil($numero3);
$numeroArredondadoBaixo = floor($numero3);

// Arredondamento com round - round()
echo 'Arredondamento com round: '.round($numeroArredondado);
echo '<br/>';

// Arredondamento para cima - ceil()
echo 'Arredondamento para cima: '.ceil($numeroArredondadoCima);
echo '<br/>';

// Arredondamento para baixo - floor()
echo 'Arredondamento para baixo: '.floor($numeroArredondadoBaixo);
echo '<br/>';












?>