<?php
// require_once('functions.php');

// Verificação de Vunerabilidade
// PARAMETER TEMPERING em PHP -----------

// PARAMETER TEMPERING - Alteração/modificação de parametros.

// Função in_array: Verifica se um dado existe em um array. Exemplo de uso:
$tecnologias = ['HTML', 'CSS', 'JS', 'PYTHON', 'PHP', 'JAVASCRIPT'];

$opcoesValidas = ['JAVASCRIPT', 'PHP'];

$erro = null;
$sucesso = null;

$mensagem = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {    
        
    if (empty($_POST['tecnologia'])) {
        $erro = 'Selecione pelo menos uma tecnologia';
    } 

    $tecnologia = $_POST['tecnologia'] ?? [];
    
    if(count($tecnologia ) != 1) {
        $erro = 'Selecione apenas uma tecnologia';
    } elseif ($tecnologia[0] != 'HTML') {
        $erro = 'Você deve selecionar o HTML';
    } else {
        $sucesso = "HTML selecionado com sucesso.";
    }
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
            <h1>Selecione o HTML</h1>

            <form action="" method="POST">
                <?php foreach($tecnologias as $tecnologia): ?>
                <label for="">
                    <?= $tecnologia; ?>                        
                </label>

                <input type="checkbox" name="tecnologia[]" value="<?= $tecnologia; ?>">
                <hr/>
                <?php endforeach; ?>

                <input type="submit" value="Enviar">
            </form>

            <!-- Aqui exibe a mensagem -->
            <br>
            <?= $erro ?>
            <?= $sucesso ?>
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
