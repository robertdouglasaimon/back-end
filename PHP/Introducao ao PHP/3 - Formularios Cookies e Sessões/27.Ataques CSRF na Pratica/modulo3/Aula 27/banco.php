<?php
// require_once('functions.php');

$erro = null;
$sucesso = null;
$mensagem = null;


?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--CDN DO BOOTSTRAP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="src/css/style.css">
    <title>Formulário</title>
</head>
<body>
    <div class="container mt-5">
        
            <form action="transferir.php" method="post">
                <h1>Simulando um Banco</h1>
                <label for="conta_destino">Conta Destino: </label>
                <input type="text" name="conta_destino" id="conta_destino" value="12345">
                <label for="valor">Valor:</label>
                <input type="number" name="valor" id="valor" value="1000">

                <button type="submit">Transferir</button>       

            </form>
            

            <!-- Aqui exibe a mensagem -->
            <br>

            <?= $erro ?>
            <?= $sucesso ?>
            <?= $mensagem ?>
        </div>

</body>
<script src="src/js/script.js"></script>
<!--CDN DO JQUERY-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>