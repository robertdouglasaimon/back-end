<?php
session_start();

if (ini_get('session.use_cookies')) { // Verifica se a sessão usa cookies.
    $params = session_get_cookie_params();
    setcookie(
        session_name(), 
        '', 
        time() - 42000,
        $params["path"], 
        $params["domain"],
        $params["secure"], 
        $params["httponly"]
    );
}

session_destroy(); // Isso encerra a sessão
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Logout</title>
  <link rel="stylesheet" href="src/css/logout.css">
</head>
<body>
  <div class="container">
    <header>
      <h1>Logout</h1>
    </header>
    <main>
      <section>
        <h2> Você foi deslogado com sucesso!</h2>
        <p> Obrigado por usar nosso site!</p>
        <button onclick="window.location.href = 'index.php';">Voltar ao início</button>
      </section>
    </main>
    <footer>
        <p>&copy; 
            <script>
                document.write(new Date().getFullYear());
            </script>
            Nosso Site
        </p>
    </footer>
  </div>
</body>
</html>