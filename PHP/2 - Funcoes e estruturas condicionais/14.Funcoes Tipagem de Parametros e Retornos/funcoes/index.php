<!-- HTML -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Estrutura Básica de Funções</title>
</head>
<body>
    <h1>Exercicio 1 de PHP</h1>
</body>
</html>

<!-- PHP -->

<!-- Funções no PHP 
Funções são blocos de codigo que podem ser reutilizados. Eles tem como objetivo executar uma tarefa especifica e podem receber ou nao argumentos. Também podem ser chamados dentro de outras funções e sempre retornam um valor.

-->
<?php
function somar(float $num1, float $num2, ?float $num3 = null): float {
    return $num1 + $num2 + $num3;
}

// echo somar(1, 2, 3);




function verificaIdade (int $anoNascimento): int {

    $anoAtual = date("Y");
    $idade = $anoAtual - $anoNascimento;
    return $idade;
}
// echo verificaIdade(1994);

function portaoDaBalada(int $anoNascimento, bool $acompanhado = false): string {
    $idadeParaEntrar = 16;
    
    $idade = verificaIdade($anoNascimento);
    if ($idade >= $idadeParaEntrar) {
        return 'Pode entrar na balada';
    } elseif ($idade < $idadeParaEntrar && $acompanhado == true) {
        return 'Pode entrar acompanhado';
    } else {  
        return 'Não pode entrar';
    }
}

echo "1994 anos sem acompanhante: ". portaoDaBalada(1994). "<br>";
echo "1999 anos com acompanhante: ". portaoDaBalada(1999, true). "<br>";
echo "2011 anos sem acompanhante: ". portaoDaBalada(2011). "<br>";
echo "2014 anos com acompanhante: ". portaoDaBalada(2014, true). "<br>";
echo "2015 anos sem acompanhante: ". portaoDaBalada(2015, true). "<br>";





?>