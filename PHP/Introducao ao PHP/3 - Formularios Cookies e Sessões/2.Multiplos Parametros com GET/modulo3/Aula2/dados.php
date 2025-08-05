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

*/
//------------------------------------------------//
// Praticando Superglobais:
echo "<pre>";
    var_dump($_GET);
echo "</pre>";

//Passando parâmetros para uma página:
$pessoa = $_GET['pessoa'];
$idade = $_GET['idade'];
$cidade = $_GET['cidade'];

// No front mostrará:
echo "Olá, $pessoa! Você tem $idade anos e mora em $cidade.";

// E na URL ficará:
// http://localhost/modulo3/Aula2/dados.php?pessoa=Robert&idade=32&cidade=Valparaiso

// Os valores estão sendo passados diretamente para a URL, sem o uso de um formulário através do método GET.

?>