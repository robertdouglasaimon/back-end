<?php
session_start();

$_SESSION['user'] = 'Robert';
$_SESSION['saldo'] = 1000;

echo 'Saldo Resetado! <br/>';

echo "<br/>";

echo "Olá, " .$_SESSION['user']."! <br/>" . "Seu saldo atual é: R$ " . $_SESSION['saldo'];


?>