<?php
session_start();

if (!isset($_SESSION['cliente_id'])) {
    header("Location: telaLogin.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Painel do Cliente</title>
</head>
<body>
<main>
    <div class="login-container">
        <h1>Ótica Fany</h1>
        <p>Bem-vindo(a), <?php echo htmlspecialchars($_SESSION['cliente_nome']); ?>!</p>

        <a class="btn" href="produtos.html">Ver Produtos</a>
        <a class="return-button" href="logout.php">Sair</a>
    </div>
</main>
</body>
</html>
