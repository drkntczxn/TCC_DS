<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.8">
    <title>Login Funcionários</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<main>

    <div class="login-container">
        <h1>Ótica Fany</h1><br><br>

        <input type="email" id="usuario" placeholder="E-mail"><br>
        <input type="password" id="senha" placeholder="Senha"><br><br>

        <button type="button" id="botaoLogar" class="return-button">Entrar</button>

        <div id="mensagem"></div>

        <p>Não tem cadastro na Ótica Fany ainda? Clique <a href="telaCadastro.php">Aqui</a></p>
        <a class="return-button" href="index.php">Voltar</a>
    </div>

</main>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="login.js"></script>
</body>
</html>
