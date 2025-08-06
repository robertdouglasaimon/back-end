<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/style.css">
    <title>Exercicio da aula 12</title>
</head>
<body>
    <h1>Exercicio da aula 12 - Pratica</h1>
    <form action="login.php" method="post">
        <label for="username"> Usuário: </label>
        <input type="text" name="usuario" id="usuario">

        <label for="password"> Senha: </label>
        <input type="password" name="senha" id="senha">

        <label for="lembrar">Tema Preferido: </label>
        <select name="tema" id="">
            <option value="claro">Claro</option>
            <option value="escuro">Escuro</option>
        </select>

        <input type="submit" value="Login">
    </form>
</body>
</html>