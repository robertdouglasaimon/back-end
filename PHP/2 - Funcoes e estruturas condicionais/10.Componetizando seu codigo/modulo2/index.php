<!--PHP-->
<?php
// Inclusão de Arquivos no PHP - Require e Include de fichas cadastrais
require('../modulo2/ficha-cadastral/constantes.php');
require('../modulo2/ficha-cadastral/data.php');


/*-------------------------------------------------------------------------------------------------------------------*/

//Emprego
$estaEmpregado = true;
$situacaoEmprego = null;
// if($estaEmpregado) {
//     $situacaoEmprego = "Empregado";
// } else {
//     $situacaoEmprego = "Desempregado";
// };

// Aplicando Ternário no PHP
$situacaoEmprego = $estaEmpregado == true ? "Empregado" : "Desempregado";

//Sobre Condicional Ternário
// A condicional ternária e uma estrutura de controle que permite executar uma instrução se uma condição for verdadeira, ou outra instrução se a condição for falsa. Ela tem a seguinte sintaxe: condicao ? instrucao1 : instrucao2. Tem como função resumir um conjunto de instrucoes condicionais em uma unica instrucao.

//Aposentadoria
$anos_necessarios_para_aposentar = null;
// if($sexo == "M") {
//     $anos_necessarios_para_aposentar = IDADE_APOSENTADORIA_MASCULINO;
// } else {
//     $anos_necessarios_para_aposentar = IDADE_APOSENTADORIA_FEMININO;
// };

// Aplicando Ternário em PHP - $anos_necessarios_para_aposentar:
$anos_necessarios_para_aposentar = $sexo == "M" ? IDADE_APOSENTADORIA_MASCULINO : IDADE_APOSENTADORIA_FEMININO;

/*-------------------------------------------------------------------------------------------------------------------*/

//Habilidades
$habilidades = ['HTML', 'CSS', 'Javascript', 'Typescript', 'ReactJS', 'Python', 'MySQL/SQLite'];

?>

<!--HTML-->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Explorando Váriaveis em PHP</title>
</head>
<body>
    <main>
        <div class="container">
            <div class="card">
                <h1>Ficha Cadastral</h1>
                <p>Nome:</p><strong><?=$nome?></strong>
                <p>Idade:</p><strong><?=$idade?></strong>
                <p>Sexo:</p><strong><?=$sexo?></strong>
                <p>Salário Mensal:</p><strong> R$ <?= number_format($salarioMensal, 2,',','.') ?> </strong>
                <p>Salário Anual:</p><strong> R$ <?= number_format($salarioAnual, 2,',','.') ?> </strong>
                <p>Status de Emprego:</p><strong> <?=$situacaoEmprego?> </strong>
                <p>Anos para Aposentadoria:</p><strong> <?= $anos_necessarios_para_aposentar-$idade ?> </strong>
                <p>Habilidades:</p><strong> <?= implode(", ", $habilidades); ?>
                </strong>
            </div>
        </div>
    </main>
</body>
</html>


