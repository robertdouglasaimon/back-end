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
 * @return string Dia da semana em texto
 */

function diaDaSemana(int $dia): string {
    if ($dia == 1) {
        return "Segunda-feira";
    }
        elseif ($dia == 2) {
        return "Terça-feira";
    }
        elseif ($dia == 3) {
        return "Quarta-feira";
    }
        elseif ($dia == 4) {
        return "Quinta-feira";
    }
        elseif ($dia == 5) {
        return "Sexta-feira";
    }
        elseif ($dia == 6) {
        return "Sábado";
    }
        elseif ($dia == 7) {
        return "Domingo";
    } else {
        return "Dia inválido";
    }
}
// echo 'Dia da semana: ' . diaSemana(1);




/** 
 * Exemplo de Switch Case no PHP
 * 
 * @param int $dia -> Dia da semana.
 * @param switch -> Executa um bloco de codigo dependendo do valor da variavel.
 * @param case -  1 a 7 -> Ação a ser executada.
 * @param break -> Quebra/Para o switch atual e continua para o proximo case/função.
 * @param default -> Executa um bloco de codigo quando nenhum case for verdadeiro.
 * @return string Retorna o texto de inválido caso o dia seja inválido.
*/
// Criando um Switch Case
function diaSemanaSwitch(int $dia): string {
    switch ($dia) {
        case 1:
            return "Segunda-feira";
            break;
        case 2:
            return "Terça-feira";
            break;
        case 3:
            return "Quarta-feira";
            break;
        case 4:
            return "Quinta-feira";
            break;
        case 5:
            return "Sexta-feira";
            break;
        case 6:
            return "Sábado";
            break;
        case 7:
            return "Domingo";
            break;
        default:
            return "Dia inválido";
    }
}

echo 'Dia da semana: ' . diaSemanaSwitch(3);


?>