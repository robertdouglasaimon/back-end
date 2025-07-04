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
$texto = "Pera, uva, maçã e salada mista.";
$espacamento = "  ";

// strlen() - Conta o número de caracteres de uma string
$numeroDeCaracteres = strlen($texto);

// strpos() - Busca a posição de uma palavra dentro de uma string.
$posicaoPalavraUva = strpos($texto, "uva");
$posicaoPalavraPera = strpos($texto, "Pera");

// Exercicio: Buscar a posição das palvras uva e pera, e escrever:
// "A palavra uva esta na posicao X e a palavra pera esta na posicao Y" 

//Resposta:
// echo "A palavra uva está na posição $posicaoPalavraUva e a palavra pera está na posição $posicaoPalavraPera";


// substr() - Extrai/Retorna uma parte de uma string.
$parteDaString = substr($texto, 6, 4);

// Exercicio: Retornar a palavra "Pera" da string usando o substr().
// Resposta:
$caracteresPalavraPera = strlen("Pera"); // 4
$posicaoPalavraPera = strpos($texto, "Pera"); // 0
$palavraPera = substr($texto, $posicaoPalavraPera, $caracteresPalavraPera);
echo $palavraPera;




?>