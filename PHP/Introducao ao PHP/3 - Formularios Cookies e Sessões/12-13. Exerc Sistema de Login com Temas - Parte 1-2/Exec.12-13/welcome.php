<?php
session_start();
$usuario = $_SESSION['usuario'];

if(empty($_SESSION['usuario'])) {
  header('Location: index.php');
  exit();
}

$tema = $_SESSION['tema'] ?? 'claro'; // Verificando se o tema foi escolhido pelo usuário


?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bem-Vindo!</title>
  <link rel="stylesheet" href="src/css/welcome.css">
</head>
<body class="<?php echo $tema; ?>">
  <div class="container">
    <header>
      <h1>Bem-Vindo!</h1>
        <?php echo "
          <p>
            Seja bem-vindo ao nosso site 
            <strong>$usuario</strong> 
          </p>" 
        ?>!
    </header>

    <main>
      <section>
        <h2>Descubra o que temos a oferecer</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed, convallis ex.</p>
        <button>Explorar</button>
      </section>

      <aside>
        <h3>Notícias recentes</h3>
        <ul>
          <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
          <li>Sed sit amet nulla auctor, vestibulum magna sed, convallis ex.</li>
          <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
        </ul>
      </aside>
    </main>

     <br>
     <a href="logout.php">
        <button>Sair</button>
      </a>
     <br>
     <br>
    

    <footer>
      <p>&copy; 
        <script> 
          document.write(new Date().getFullYear());   
        </script> Nosso Site</p>
    </footer>
  </div>
</body>
</html>