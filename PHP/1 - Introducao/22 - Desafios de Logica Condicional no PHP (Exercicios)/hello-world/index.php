<h3>Exercicio 1:</h3>
<!-- Formulário de Entrada de Dados no HTML-->
<form method="post">
    <label>Digite seu nome:</label>
    <input type="text" name="nome"> <br>
    <label>Digite sua senha:</label>
    <input type="password" name="senha">
    <button type="submit">Enviar</button>
</form>

<?php
/* ------------------Estruturas Condicionais no PHP ----------------------
O que é uma condicional?
Uma estrutura de controle que permite executar um conjunto de instruções. 

Funções condicionais:
- if
- else
- elseif
- switch

IF - CONDICIONAL SIMPLES
Condicional "if": Essa condicional verifica se uma condição eh verdadeira ou falsa.

if (condicao) {
    // Instrucoes a serem executadas se a condição for verdadeira
}

ELSE - CONDICIONAL SIMPLES
Condicional "else": Essa condicional verifica se uma condição eh verdadeira ou falsa.

if (condicao) {
    // Instrucoes a serem executadas se a condição for verdadeira
} else {
    // Instrucoes a serem executadas se a condição for falsa
}

ELSEIF - CONDICIONAL SIMPLES
Condicional "elseif": Essa condicional verifica se uma condição eh verdadeira ou falsa.

if (condicao1) {
    // Instrucoes a serem executadas se a condição for verdadeira
} elseif (condicao2) {
    // Instrucoes a serem executadas se a condição for verdadeira
} else {
    // Instrucoes a serem executadas se as condições forem falsas
}


SWITCH - CONDICIONAL SIMPLES
Condicional "switch": Essa condicional verifica se uma condição é verdadeira ou falsa.

switch (variavel) {
    case valor1:
        // Instrucoes a serem executadas se a condição for verdadeira
        break;
    case valor2:
        // Instrucoes a serem executadas se a condição for verdadeira
        break;
    default:
        // Instrucoes a serem executadas se as condições forem falsas
        break;
}
*/

// Operadores de Comparação: São usados para comparar valores. Eles retornam um booleano (true ou false):
// == : Igual
// != : Diferente
// > : Maior que
// < : Menor que
// >= : Maior ou igual a
// <= : Menor ou igual a

// Operadores Lógicos: São usados para combinar condições. Eles retornam um booleano (true ou false):
// && : E
// || : Ou
// ! : Nao

// ----------------------------------------- //

// Exercicios de fixação:
/*
Exercicio 1:
 * Crie um script PHP que simula um sistema de login simples.
 * O sistema deve verificar se o nome de usuário e a senha fornecidos estão corretos.
 * Se ambos estiverem corretos, exiba uma mensagem de boas-vindas.
 * Se o nome de usuário estiver correto, mas a senha estiver errada, exiba uma mensagem de erro de senha.
 * Se o nome de usuário estiver incorreto, exiba uma mensagem de erro de nome de usuário.
*/

// Resposta:
$usuarioCorreto = 'admin';
$senhaCorreta = '123456';

if ($_SERVER["REQUEST_METHOD"] == "POST" && 
    $_POST["nome"] == $usuarioCorreto && 
    $_POST["senha"] == $senhaCorreta) {

    echo "Usuário e senha corretos!<br>";
    echo "Olá, " . $_POST["nome"] . "! <br>";
    echo "Seja bem-vindo!";

} elseif ($_SERVER["REQUEST_METHOD"] == "POST" &&
          $_POST["nome"] === $usuarioCorreto) {

    echo "Usuário correto! Verifique a senha e tente novamente.<br>";
    echo "Senha incorreta!";

} elseif ($_SERVER["REQUEST_METHOD"] == "POST" &&
          $_POST["senha"] === $senhaCorreta) {

    echo "Senha correta! Verifique o nome de usuário e tente novamente.<br>";
    echo "Usuário incorreto!";

} else {
    echo "Usuário ou senha incorretos!";

};

echo "<br>";
echo "<br>";
echo "--------------------------------------------------------------------------------------------------------------------";
echo "<br>";
echo "<br>";

/*
Exercicio 2:
 * Crie um script PHP que verifica se uma pessoa pode entrar em uma festa.
 * Para entrar na festa, a pessoa precisa ter pelo menos 18 anos ou estar acompanhada por um adulto. 
*/
// Resposta:
echo "<h3>Exercicio 2:</h3>";
$idade = 17;
$reponsavelMaior = false;


echo "Verificador de idade para entrar na festa adolescente: <br>";
if ($idade >= 18) {
    echo 'Bem vindo ao nosso evento, pode entrar na festa!';

}  elseif ($idade >= 18 || $reponsavelMaior == true ) {
    echo 'A idade é menor que 18, mas o responsável é maior de idade, entrada permitida na festa!';

} elseif ($idade <= 18 || $responsavelMaior == false) {
    echo 'A idade é menor que 18, e o responsável nao é meior de idade. A entrada não é permitida na festa!';
}
   else {
    echo 'Idade abaixo do permitido e não acompanhado por um adulto, não pode entrar na festa!';
};

echo "<br>";
echo "<br>";
echo "--------------------------------------------------------------------------------------------------------------------";
echo "<br>";
echo "<br>";

/*
Exercicio 03:
 * Crie um script PHP que determina se um cliente tem direito a um desconto especial em uma loja e qual será o desconto.
 * O cliente tem direito ao desconto de 20% se o valor de suas compras for maior que R$ 200 ou se ele for um membro VIP.
 * Se o valor total das compras estiver entre R$ 150 e R$ 200, o cliente pode receber um desconto de 10%.

*/
// Resposta:
echo "<h3>Exercicio 3: </h3>";   
$compras = 150;
$vip = false;
$desconto = null;

if ($compras > 200 || $vip == true) {
    $desconto = 20;
} elseif ($compras >= 150 && $compras <= 200) {
    $desconto = 10;
} else {
    $desconto = 0;
}
echo 'O cliente tem direito ao desconto de ' . $desconto . '%';

?>
