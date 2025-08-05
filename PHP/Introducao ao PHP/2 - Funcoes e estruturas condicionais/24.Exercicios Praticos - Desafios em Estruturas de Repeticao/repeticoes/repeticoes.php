<?php
echo "<h1>Exercícios Práticos - Desafios em Estruturas de Repetição com PHP</h1>";

// Exercícios Práticos - Desafios em Estruturas de Repetição com PHP ---------------------------------------------

// 1. Crie um script para escrever a tabuada de  5 (5 x 1 a 5 x 10) usando estrutura de repetição while.
//Resolução:

echo "<h2> Exercicio 1 - Tabuada de multiplicação de 5 usando while: </h2>";
$numeroDeEntrada = 1;
while ($numeroDeEntrada <= 10) {
    echo "5 x $numeroDeEntrada  = " . ($numeroDeEntrada * 5) . "<br>";
    $numeroDeEntrada++;
};

// ---------------------------------------------
echo "<br/>";
echo "<br/>";
// ---------------------------------------------

// 2. Crie um script para escrever a soma de todos números de 1 a 20 com while.
//Resolução:

echo "<h2> Exercicio 2 - Soma de todos números de 1 a 20 usando while: </h2>";
$contador = 1;
$soma = 0;
while ($contador <= 20) {
    echo "A variável SOMA é: $soma<br>";
    $soma += $contador;
    $contador++;
}
echo "Soma de todos números de 1 a 20: $soma<br>";

// ---------------------------------------------

echo "<br/>";
echo "<br/>";
// ---------------------------------------------

// 3. Crie um script que escreva todos os números de 1 a 10 com o for:
//Resolução:

echo "<h2> Exercicio 3 - Todos os números de 1 a 10 usando for: </h2>";
for ($i = 1; $i <= 10; $i++) {
    echo "$i <br>";
}

// ---------------------------------------------

echo "<br/>";
echo "<br/>";
// ---------------------------------------------

// 4. Escreva um script PHP que desenhe um meio triângulo com asteriscos (*) usando o for:
//Resolução:

echo "<h2> Exercicio 4 - Desenhar um meio triângulo com asteriscos usando for: </h2>";
for ($variavel1 = 1; $variavel1 <= 10; $variavel1++) {
    for ($variavel2 = 1; $variavel2 <= $variavel1; $variavel2++) {
        echo "*";
    }
    echo "<br>";
}

// ---------------------------------------------

echo "<br/>";
echo "<br/>";
// ---------------------------------------------

// 5. Crie um array de número ([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]) e use um loop foreach para somar todos os elementos do array e imprimir o resultado na tela:
//Resolução:

echo "<h2> Exercicio 5 - Somar todos os números do array usando foreach: </h2>";
$numero = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$soma = 0;
foreach ($numero as $n) {
    $soma += $n;
}
echo "Soma de todos os números do array: $soma<br>";

?>