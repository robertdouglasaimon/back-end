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

// Exemplo de string
$nome = "João";
$espacador = " ";
$contadorDeCaracteres = strlen($nome);
echo "O nome dele é $nome. E tem $espacador $contadorDeCaracteres";







// // Exemplo de integer
// $idade = 30;
// echo "Eu tenho $idade anos.";

// // Exemplo de float
// $altura = 1.75;
// echo "Minha altura é $altura metros.";

// // Exemplo de boolean
// $estudando = true;
// echo "Estou estudando: $estudando.";

// // Exemplo de array
// $frutas = ["banana", "maçã", "laranja"];
// echo "Minhas frutas favoritas são: " . implode(", ", $frutas); // implode é uma função que concatena os elementos do array

// // Exemplo de object
// class Pessoa {
//     public $nome;
//     public $idade;

//     public function __construct($nome, $idade) {
//         $this->nome = $nome;
//         $this->idade = $idade;
//     }
// }

// $pessoa = new Pessoa("João", 30);
// echo "Eu sou $pessoa->nome e tenho $pessoa->idade anos.";

// // Exemplo de null
// $nome = null;
// echo "O nome é $nome.";

// // Exemplo de resource
// $arquivo = fopen("arquivo.txt", "r");
// echo "O arquivo é $arquivo.";

?>