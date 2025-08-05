<?php
// Repetições no PHP ----------------------------------------------------------------------------
/* Repetições são estruturas de controle que permitem executar um bloco de codigo um certo numero de vezes. Existem quatro tipos de repetição no PHP:
    - for
    - while
    - do while
    - foreach

    - Switch Case

Exemplos: 
    Repetição "for"
    O for tem a seguinte sintaxe:

    for($i = 0; $i < 10; $i++) {
        echo $i;
    }

    E é usado para executar um bloco de codigo um certo numero de vezes, onde o valor inicial da variavel de controle ($i) e incrementado em 1 em cada iteracao. A iteração é realizada enquanto o valor da variavel de controle for menor que 10.

    Repetição "while"
    O while tem a seguinte sintaxe:

    $i = 0;
    while($i < 10) {
        echo $i;
        $i++;
    }

    E é usado para executar um bloco de codigo enquanto uma condicao for verdadeira. A iteração é realizada enquanto a condicao for verdadeira.

    Repetição "do while"
    O do while tem a seguinte sintaxe:

    $i = 0;
    do {
        echo $i;
        $i++;
    } while($i < 10);

    E é usado para executar um bloco de codigo enquanto uma condicao for verdadeira. A iteração é realizada enquanto a condicao for verdadeira.

    Repetição "foreach"
    O foreach tem a seguinte sintaxe:

    $array = array(1, 2, 3, 4, 5);
    foreach($array as $value) {
        echo $value;
    }

    E é usado para executar um bloco de codigo para cada elemento de um array. A iteração é realizada para cada elemento do array.

    O Switch Case tem a seguinte sintaxe:

    switch($dia) {
        case 1:
            echo "Segunda-feira";
            break;
        case 2:
            echo "Terça-feira";
            break;
        case 3:
            echo "Quarta-feira";
            break;
        case 4:
            echo "Quinta-feira";
            break;
        case 5:
            echo "Sexta-feira";
            break;
        case 6:
            echo "Sábado";
            break;
        case 7:
            echo "Domingo";
            break;
        default:
            echo "Dia inválido";
    }

    E é usado para executar um bloco de codigo dependendo do valor da variavel. A iteração é realizada dependendo do valor da variavel.
*/
// ---------------------------------------------------------------------------- //


/**
 * Exemplos de Repetições no PHP
 * @param while -> Repetição "while": E usado para executar um bloco de codigo enquanto uma condicao for verdadeira. A iteração é realizada enquanto a condicao for verdadeira.
*/


// Criando um While
$idade = 1;
while ($idade <= 10) {
    echo 'A sua idade é: ' . $idade . '<br>';
    $idade++;
}
echo "Aqui continua o código após o while";

echo "<br>";
echo "<br>";

// Criando um Do While
$idade = 1;
do {
    echo 'A sua idade é: ' . $idade . '<br>';
    $idade++;
} while ($idade < 1);
echo "Aqui continua o código após o do while";


?>