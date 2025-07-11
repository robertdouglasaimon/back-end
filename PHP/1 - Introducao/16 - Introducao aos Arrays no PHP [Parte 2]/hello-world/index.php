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
// ----------------------------------------- //

// Exemplo de Array no PHP
// Array são estruturas de dados que podem armazenar uma coleção de elementos de qualquer tipo.

// Forma de declaração de um array:
//Forma 1 - Forma antiga.
$nomes = array("João", "Maria", "Pedro");

//Forma 2 - Atualizado e atual.
$nomes1 = ["João", "Maria", "Pedro"];


// Cada elemento de um array tem um valor que determina a posição dele na coleção. A primeira posição tem o valor 0, a segunda posição tem o valor 1, e assim por diante.

// Os elementos de um array podem ser acessados usando o operador de colchetes []
// echo $nomes[0]; // Imprime "João"
// echo $nomes[1]; // Imprime "Maria"
// echo $nomes[2]; // Imprime "Pedro"

echo "Esse é o valor número 0 do array: $nomes[0]";
echo "<br>";
echo "Esse é o valor número 1 do array: $nomes[1]";
echo "<br>";
echo "Esse é o valor número 2 do array: $nomes[2]";
echo "<br>";

// ----------------------------------------- //

echo "<br>";

// ----------------------------------------- //
// Arrays Associativos no PHP

// Arrays associativos sao estruturas de dados que podem armazenar uma colecao de elementos de qualquer tipo, associados a chaves (ou keys) especificas.

// Forma de declaração de um array:
//Forma 1 - Forma antiga.
$carros = array("Fiat" => 30, "Ferrari" => 25, "Honda" => 35);

//Forma 2 - Atualizado e atual.
$carros1 = [
    "Fiat" => 30, 
    "Ferrari" => 25, 
    "Honda" => 35
];
echo "<br>";

echo "Esse é o valor equivalente ao carro Fiat: $carros[Fiat]";

echo "<br>";
echo "<br>";

// Vamos usar var_dump para ver o array no navegador e entender melhor o que acontece. Usaremos a tag '<pre></pre>' do HTML para formatar o array para ficar mais legivel.

echo "Essa é a estrutura do array: ";
echo '<pre>';
var_dump($carros);
echo "</pre>";
// ----------------------------------------- //

echo "<br>";
echo "<br>";

// ----------------------------------------- //
// Inserindo um Array dentro de outro Array.

// Vamos exibir no navegador um array dentro de outro array.

// Forma de declaração de um array dentro de outro array:

$informacoes = [
    "Joao" => [
        "nome" => "João",
        "idade" => 30,
        "altura" => 1.80,
        "cidade" => "São Paulo"
    ],
    "Maria" => [
        "nome" => "Maria",
        "idade" => 25,
        "altura" => 1.70,
        "cidade" => "Rio de Janeiro"
    ],
    "Pedro" => [
        "nome" => "Pedro",
        "idade" => 35,
        "altura" => 1.90,
        "cidade" => "Belo Horizonte"
    ]
];

echo "Essa é a estrutura do array dentro do array: ";
echo '<pre>';
var_dump($informacoes);
echo "</pre>";

// ----------------------------------------- //

echo "<br>";
echo "<br>";

// ----------------------------------------- //
// Exibindo um array dentro de outro array.

// Vamos exibir no navegador só um dos arrays dentro do array "informacoes" que é o principal. Vamos exibir o array de João:

echo 'Aqui nós iremos exibir o array de João que está dentro do array principal "informacoes": ';
echo '<pre>';
var_dump($informacoes["Joao"]);
echo "</pre>";
// ----------------------------------------- //





?>