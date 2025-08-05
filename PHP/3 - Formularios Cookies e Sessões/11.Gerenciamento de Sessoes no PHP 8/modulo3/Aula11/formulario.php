<!-- PHP -->
<?php 
/* Superglobais no PHP ---------------------------
São variaveis que podem ser usadas em qualquer lugar do código e tem como função armazenar dados globais.

Segue a ordem de precedencia:
    1. $_GET
    2. $_POST
    3. $_REQUEST
    4. $_SESSION
    5. $_SERVER
    6. $_ENV


Explicando os Superglobais:
$_GET - Armazena dados enviados pela URL
Exemplo: 
    http://localhost/aula1/dados.php?nome=João

$_POST - Armazena dados enviados pelo método POST
Exemplo: 
    <form method="post" action="dados.php">
        <input type="text" name="nome">
        <input type="submit" value="Enviar">
    </form>

$_REQUEST - Armazena dados enviados pelo método POST ou GET
Exemplo: 
    http://localhost/aula1/dados.php?nome=João
    http://localhost/aula1/dados.php

$_SESSION - Armazena dados de sessão
Exemplo:
    $_SESSION['nome'] = "João";
    $_SESSION['idade'] = 20;

$_SERVER - Armazena informações do servidor
Exemplo:
    $_SERVER['PHP_SELF'] = "/aula1/dados.php";
    $_SERVER['SERVER_NAME'] = "localhost";

$_ENV - Armazena variaveis de ambiente
Exemplo:
    $_ENV['SERVER_NAME'] = "localhost";


Operador Nullish Operator - ?? - Se o valor for nulo ou vazio, ele retorna o valor a esquerda, caso contrario, retorna o valor a direita.

*/
//------------------------------------------------//
// Praticando as Superglobais:


if (!empty($_POST['login']) && !empty($_POST['senha'])) {
    $login = htmlspecialchars($_POST['login']);
    $senha = htmlspecialchars($_POST['senha']);

    $mensagem = null;
    if ($_SERVER['REQUEST_METHOD'] == "POST" && $login =='admin' && $senha == 'admin') {
       $mensagem = "<script>alert(\"Parâmetros 'login' e 'senha' foram enviados. Conta logada.\");</script>";
    } else {         
        $mensagem = "<script>alert(\"Parâmetros 'login' e 'senha' incorretos. Conta não logada.\");</script>";
    }
};
?>

<!-- HTML -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Validação de Dados Vazios e Nulos</title>
</head>
<body>
    <h1>Validação de Dados Vazios e Nulos</h1>
    <form action="" method="post">
        <label for="Login">
            <span class="login">Insira o Login:</span>
                <input type="text" name="login" placeholder="Digite o nome da pessoa" value="<?= $login ?? ''; ?>">
        </label>
        <br>
        <label for="Senha">
            <span class="senha">Insira a Senha:</span>
                <input type="password" name="senha" placeholder="Digite a senha" value="<?= $senha ?? ''; ?>">
                <input type="submit" value="Enviar">
                <?php 
                    if(!empty($mensagem)) {
                        echo $mensagem;
                    }; 
                ?>
        </label>
    </form>
</body>
</html>

<!-- PHP -->
<?php 
//Praticando o uso do $_SERVER:
// $_SERVER['REQUEST_METHOD'] = "POST"{} : Armazena o método de envio da requisição.

 /* Bloco PHP só para ver se os dados estao sendo enviados certinho via POST */    
echo "<br>";
echo "<br>";

echo "$login <br>"; 
echo $senha;
?>