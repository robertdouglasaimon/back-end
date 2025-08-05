<!--PHP-->
<?php
$nome = "Robert Douglas";
$idade = 31;
$sexo = "M";
$salarioMensal = 2210.30;
$salarioAnual = $salarioMensal * 12;
$estaEmpregado = true;
$totalParaAposentadoria = null;
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
                <p>Salário Mensal:</p><strong><?=$salarioMensal?></strong>
                <p>Salário Anual:</p><strong><?=$salarioAnual?></strong>
                <p>Status de Emprego:</p><strong>
                    <?php
                        if ($estaEmpregado == true){ 
                            echo "Empregado";
                        } else {
                            echo "Desempregado";
                        };
                    ?>
                </strong>
                <p>Anos para Aposentadoria:</p><strong>
                    <?php
                        if ($sexo == "M") {
                            $totalParaAposentadoria = 65;
                        } else {
                            $totalParaAposentadoria = 62;
                        }
                        echo $totalParaAposentadoria - $idade;
                    ?>
                </strong>
                <p>Habilidades:</p><strong>
                    <?=
                      implode(", ", $habilidades);
                    ?>
                </strong>
            </div>
        </div>
    </main>
</body>
</html>


