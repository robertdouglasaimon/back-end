<?php
session_start();

if (!empty($_POST['usuario']) && !empty($_POST['senha'])) {
    $usuario = htmlspecialchars($_POST['usuario']);
    $senha = htmlspecialchars($_POST['senha']);

    if ($usuario === 'admin' && $senha === 'admin') {
        $_SESSION['usuario'] = $usuario;

        if (isset($_POST['tema'])) {
            $_SESSION['tema'] = $_POST['tema'];
        }

        if (!empty($_POST['tema'])) {
            setcookie('tema', htmlspecialchars($_POST['tema']));
        }

        // Redirecionando para a página de bem-vindo do exercicio =D
        header("Location: welcome.php"); // Redirecionando para a página de bem-vindo.
        exit;

    } else {
        // Estilo inline baseado no tema que o usuário lazarento escolheu:
        $tema = $_POST['tema'] ?? 'claro';

        if ($tema === 'escuro') {
            echo '<style>body { background-color: #000; color: #fff; }</style>';
        } else {
            echo '<style>body { background-color: #fff; color: #000; }</style>';
        }

        echo "Usuário ou senha incorretos!<br>";
        echo "<a href='index.php'>Tente novamente</a>";
    }

} else {
    echo "Preencha todos os campos!<br>";
    echo "<a href='index.php'>Voltar</a>";
}
?>
