<?php
//Inclusão de Arquivos no PHP

//Include e Require.php
// São usados para incluir arquivos externos em um script PHP. O include e o require tem a mesma funcao, mas o include não da erro se o arquivo não for encontrado, enquanto o require dá erro se o arquivo não for encontrado e para a execução do script.

// Exemplo de uso:
// include('nomeDoArquivo.php');
// include_once('nomeDoArquivo.php');
// require('nomeDoArquivo.php');
// require_once('nomeDoArquivo.php');

// Na prática:
include('../includes/nome.php'); // Incluindo um arquivo externo com include.

require('../includes/nome.php'); // Incluindo um arquivo externo com require.


?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/includes.css">
    <title>Inclusão de Arquivos</title>
</head>
<body>
    <main class="container" >
        <div class="card">
            <h1>Inclusão de Arquivos</h1>
            <p>Eu sou <?=$nome1?> e esse é um texto usando elemento externo com include.</p> <!-- Incluindo uma variavel externa -->
            <p>Essa é a <?=$nome2?> e esse é um texto usando elemento externo com require.</p> <!-- Incluindo uma variavel externa -->
        </div>
    </main>
</body>
</html>