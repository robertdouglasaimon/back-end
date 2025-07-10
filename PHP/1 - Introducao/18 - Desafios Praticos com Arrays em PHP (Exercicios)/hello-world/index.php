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

// Exercicios para fixar conhecimentos 
/* 
Exercicios 01:
- 1. Crie um array chamado Cidades contendo o nome de 5 cidades que você quer visitar.
 - 2. Imprima na tela o valor da terceira cidade deste array. 
 */
// Resolvendo a atividade:
$cidades = ['São Paulo', 'Brasilia', 'Rio de Janeiro', 'Piaui', 'Belo Horizonte'];

echo "Exercicio 01: <br/>";
echo "A cidade de número 3 é: $cidades[2] 
<br/><br/>"; 

/*
Exercicio 02:
- 1. Crie um array associativo chamado $alunos onde as chaves são os nomes de três alunos e os valores são as idades deles.
 - 2. Imprima na tela a idade do segundo aluno.
*/
// Resolvendo a atividade:
$alunos = [
    'João' => 20,
    'Maria' => 25,
    'Pedro' => 30
];

echo "Exercicio 02: <br/>";
echo "A idade do segundo aluno é: $alunos[Maria]
<br/><br/> ";

/*
Exercicio 03:
- 1. Crie um array chamado $cores contendo três cores.
- 2. Adicione uma nova cor ao final do array.
- 3. Remova a primeira cor do array.
- 4. Imprima na tela o array resultante.
*/
// Resolvendo a atividade:
$cores = ['Azul', 'Vermelho', 'Verde']; // 1
$cores[] = 'Amarelo'; // 2
unset($cores[0]); // 3

echo "Exercicio 03: <br/>";
echo "O array resultante é:
<br/>";
'<pre>';
    echo var_dump($cores);// 4
'</pre>';

echo '<br/>';
echo '<br/>';

/*
Exercicio 04:
- 1. Crie um array associativo chamado $precos onde as chaves são os nomes de produtos e os valores são seus preços.
- 2. Atualize o preço de um dos produtos adicionando + R$ 10,00 ao valor atual.
- 3. Atualize o preço do primeiro produto reduzindo - R$ 1,00 do valor atual.
- 4. Imprima na tela o array resultante.
*/
// Resolvendo a atividade:
$precos = [ // 1
    'Produto 1' => 20,
    'Produto 2' => 30,
    'Produto 3' => 40
];
$precos['Produto 1'] += 10; // 2
$precos['Produto 2'] -= 1; // 3

echo "Exercicio 04: <br/>";
echo "O array resultante é:
<br/>";
'<pre>';
    echo var_dump($precos); // 4
'</pre>
<br/><br/>';

echo '<br/>';
echo '<br/>';












?>