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

// Exemplo de valores Boolean no PHP

// --------------------------------------- //
// Booleanos são valores lógicos que podem ser verdadeiro (true) ou falso (false).

// $booleano1 = true; // Verdadeiro, 1
// $booleano2 = false; // Falso, 0
// echo "Booleano 1: " . $booleano1 . "<br>";
// --------------------------------------- //

echo "<br/>";

// --------------------------------------- //
// Variável DUMP - Exibe o tipo e o valor da variável

// var_dump($booleano1); 
// echo "<br/>";
// var_dump($booleano2);
// --------------------------------------- //

echo "<br/>";

// --------------------------------------- //
// Invertendo o valor da variável
// $estaEstudando = true;
// var_dump($estaEstudando);
// echo "<br/>";

// Para invertendo o valor da variável é necessario usar o operador de negação (!) para reatribuir o valor da variável em seu inverso:
// $estaEstudando = !$estaEstudando;

// var_dump($estaEstudando);
// echo "<br/>";
// --------------------------------------- //

echo "<br/>";

// --------------------------------------- //
// Aplicando o uso do Booleano em uma condicional
// Exemplo:
$alunoEstudando = true;

// Fazendo a primeira condicional para se algo for X ou se algo for Y entragar algum resultado:
if ($alunoEstudando) {
    echo "O aluno está estudando. Continue estudando!";
} else {
    echo "O aluno não está estudando. Separe um tempo para os estudos!";
}
// --------------------------------------- //
    
    











?>