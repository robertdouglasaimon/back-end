<?php
session_start();

if (!empty($_SESSION['user'])) {
    echo "Seu saldo atual é: R$ " . $_SESSION['saldo'];
}

?>