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

// Manipulação de dados com Arrays no PHP
$frutas = [ "laranja", "limão"];

// Adicionando um item ao array
//Forma 1
array_push($frutas, "abacaxi");

//Forma 2
$frutas[] = "melão";

// Visualizando o array
"<pre>";
    var_dump($frutas);
"</pre>";
// ----------------------------------------- //

echo "<br>";
echo "<br>";

// ----------------------------------------- //
// Adicionando um novo indice ao array

// Ultilizamos o mesmo metodo para adicionar um novo item ao array, só definimos um novo indice (ou modificamos um  item existente se necessário):
$frutas[4] = "banana";


// Visualizando o array
"<pre>";
    var_dump($frutas);
"</pre>";

// ----------------------------------------- //

echo "<br>";
echo "<br>";

// ----------------------------------------- //
// Removendo um item do array
// array_shift($frutas) - Remove o primeiro item do array
// array_pop($frutas) - Remove o último item do array
array_shift($frutas); // Removeu a Laranja
array_pop($frutas); // Remove o Melão

// Visualizando o array
"<pre>";
    var_dump($frutas);
"</pre>";
// ----------------------------------------- //

echo "<br>";
echo "<br>";

// ----------------------------------------- //
// Função que conta quantos elementos tem um array

echo count($frutas); // Conta quantos elementos tem no array.

echo "<br>";
echo "<br>";

// Agora vamos guardar a quantidade de elementos em uma variavel:
$quantidadeDeItens = count($frutas);

echo "O array de fruta tem $quantidadeDeItens elementos.";
// ----------------------------------------- //

echo "<br>";
echo "<br>";

// ----------------------------------------- //
// Pesquisando se há um item especifico dentro do array usando a função in_array():
echo in_array("melão", $frutas); // Retorna true ou false

// ----------------------------------------- //

echo "<br>";
echo "<br>"; 

// ----------------------------------------- //
// Fundindo arrays com a função array_merge():
$frutas2 = ["abacaxi", "banana", "caju"];
$frutas3 = ["caqui", "damasco", "figo"];

$todasFrutas = array_merge($frutas2, $frutas3);

// Visualizando o array
echo "Esse é o array de todas as frutas: ";
echo "<br>";
"<pre>";
    var_dump($todasFrutas);
"</pre>";

// ----------------------------------------- //
?>