<?php
session_start();


// Se não tiver usuário logado, ele vai dar erro!
if (empty($_SESSION['user'])) {
    die("Usuário não autenticado!");
}

// Se tiver, ele faz a transferência e mostra o saldo atualizado.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $contaDestino = $_POST['conta_destino'];
    $valor = $_POST['valor'];

    $_SESSION['saldo'] -= $valor;
    echo "Olá, " . $_SESSION['user'] . ". Transferência de R$ $valor para a conta $contaDestino realizada com sucesso!";
    echo '<br/> Seu novo saldo é: R$ ' . $_SESSION['saldo'];
} else {
    echo "Acesso inválido. Use o formulário para enviar os dados.";
}
?>
