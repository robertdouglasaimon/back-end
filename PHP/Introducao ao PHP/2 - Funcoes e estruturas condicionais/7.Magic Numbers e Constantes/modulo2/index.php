<!--PHP-->
<?php
$nome = "Robert Douglas";
$idade = 25;
$sexo = "M";
$salarioMensal = 2210.30;
$salarioAnual = $salarioMensal * 12;

// Criando uma variavel Constante no PHP
// Variavel Constante - 1º
define("IDADE_APOSENTADORIA_MASCULINO", 65);
define("IDADE_APOSENTADORIA_FEMININO", 62);

//Variavel Padrão - 2º
// $idadeAposentadoriaMasculina = 65;
// $idadeAposentadoriaFeminina = 62;

// A diferença entre as duas variaveis acima é que a 1º é do tipo constante e a 2º é do tipo variavel. A variavel pode ser alterada e a constante não pode ser alterado ou redefinida. 

//Emprego
$estaEmpregado = false;
$situacaoEmprego = null;
if($estaEmpregado) {
    $situacaoEmprego = "Empregado";
} else {
    $situacaoEmprego = "Desempregado";
};

//Aposentadoria
$anos_necessarios_para_aposentar = null;
if($sexo == "M") {
    $anos_necessarios_para_aposentar = IDADE_APOSENTADORIA_MASCULINO;
} else {
    $anos_necessarios_para_aposentar = IDADE_APOSENTADORIA_FEMININO;
};

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


