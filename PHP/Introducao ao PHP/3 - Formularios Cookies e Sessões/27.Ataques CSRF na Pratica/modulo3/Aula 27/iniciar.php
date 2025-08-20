<?php
session_start();
$_SESSION['user'] = 'Robert';
$_SESSION['saldo'] = 5000;

// Redireciona para o formulário
header('Location: formulario.php'); // ou o nome do seu arquivo HTML
exit;
