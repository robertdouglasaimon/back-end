<?php
require_once('functions.php');

// Tipos e manipulação de arrays em PHP -----------
//Tipos de Array que recebemos no mundo real:

// Array comum:
$tecnologias = ['HTML', 'CSS', 'JS'];


// Recebendo array de banco de dados:
$tecnologias_banco = [
    ['codigo' => 'html', 'nome' => 'HTML'],
    ['codigo' => 'css', 'nome' => 'CSS'],
    ['codigo' => 'js', 'nome' => 'JS'],
];

//Recebendo dados de uma API Externa:
$tecnologias_api = [
    'html' => 'HTML',
    'css' => 'CSS',
    'js' => 'JS',
];

$mensagem = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $opcao = $_POST['opcao'];
    echo $opcao;
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/style.css">
    <!--CDN DO BOOTSTRAP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Formulário</title>
</head>
<body>
    <div class="container mt-5">
            <h1>Formulário de Opções</h1>


            <h2>Formulário de Opções Array Comum</h2>
            <form action="" method="POST">

                <select name="opcao" id="#">
                    <?php foreach($tecnologias as $tec): ?>
                        <option value="<?= $tec ?>"><?= $tec ?></option>
                    <?php endforeach; ?>    
                </select>

                <!--Explicando: O foreach $tecnologias serve para percorrer o array e exibir as opções do select. Depois do foreach, o $tec serve para exibir o valor do array. -->                  

                <input type="submit" value="Enviar">
            </form>

            <br>
            <br>

            <h2>Formulário de Opções Array de Banco de Dados</h2>
            <form action="" method="POST">

                <select name="opcao" id="#">
                    <?php foreach($tecnologias_banco as $tec1): ?>
                        <option value="<?= $tec1['codigo'] ?>">
                            <?= $tec1['nome'] ?>
                        </option>
                    <?php endforeach; ?>    
                </select>    

                <!--Explicando: O foreach $tecnologias_banco serve para percorrer o array e exibir as opções do select. Depois do foreach, o $tec serve para exibir o valor do array, só que nesse caso chamamos o array e especificamos o campo que queremos e o valor. -->              

                <input type="submit" value="Enviar">
            </form>

            <br>
            <br>

            <h2>Formulário de Opções Array de API Externa</h2>
            <form action="" method="POST">

                <select name="opcao" id="#">
                    <?php foreach($tecnologias_api as $codigo => $valor): ?>
                        <option value="<?= $codigo ?>">
                            <?= $valor ?>
                        </option>
                    <?php endforeach; ?>    
                </select>
                
                <!--Explicando: O foreach $tecnologias_api serve para percorrer o array e exibir as opções do select. Depois do foreach, aqui muda um pouco a dinâmica pois dessa vez o $codigo pode ser tanto a chave quanto o valor ($codigo => $valor). Então no option, especificamos que o value vai ser o $codigo que é da onde ver o $valor e dentro do option, exibimos o $valor em si.;-->

                <input type="submit" value="Enviar">
            </form>

            <!-- Aqui exibe a mensagem -->
            <br>
            <?= $mensagem ?>
        </div>
</body>
<script src="src/js/script.js"></script>
<!--CDN DO JQUERY-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>

<?php
// Função SANITEZE (STRING): Retorna um dado limpo, ou seja, sem tags HTML. Exemplo de uso:
// $texto = filter_var($texto, FILTER_SANITIZE_STRING);

// Função SANITIZA (EMAIL): Retorna um email limpo. Exemplo de uso:
// $email = filter_var($email, FILTER_SANITIZE_EMAIL);

// Função FILTER_VALIDATE_EMAIL: Valida um email. Exemplo de uso:
// if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
//     echo 'Email valido';
// }

// Função STRLEN: Retorna o tamanho de uma string. Exemplo de uso:
// if (strlen($texto) > 10) {
//     echo 'Texto muito longo';
// }

// Função FILTER_VAR: Valida um dado. Exemplo de uso:
// if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
//     echo 'Email valido';
// }
?>
