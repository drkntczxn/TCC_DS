<?php
// Faz o mysqli lancar excecao em caso de erro, em vez de falhar em silencio
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

include "connection.php";

$nome  = trim($_POST['nomecli']  ?? '');
$email = trim($_POST['email']    ?? '');
$cpf   = trim($_POST['cpfcli']   ?? '');
$senha = trim($_POST['senhacli'] ?? '');

// Sem senha nao cadastra - senao o cliente nunca consegue logar
if ($nome === '' || $email === '' || $senha === '') {
    die("Preencha nome, e-mail e senha. <a href='telaCadastro.php'>Voltar</a>");
}

// A senha nunca e guardada em texto puro, apenas o hash
$senhaHash = password_hash($senha, PASSWORD_DEFAULT);

try {

    $stmt = mysqli_prepare(
        $con,
        "INSERT INTO tbcliente (NOMECLI, EMAIL, CPFCLI, SENHACLI) VALUES (?, ?, ?, ?)"
    );

    mysqli_stmt_bind_param($stmt, "ssss", $nome, $email, $cpf, $senhaHash);
    mysqli_stmt_execute($stmt);

} catch (mysqli_sql_exception $e) {

    // 1062 = valor duplicado (email ou cpf ja cadastrado)
    if ($e->getCode() == 1062) {
        die("Este e-mail ou CPF ja esta cadastrado. <a href='telaCadastro.php'>Voltar</a>");
    }

    die("Erro ao cadastrar: " . $e->getMessage());
}

header("Location: telaLogin.php");
exit;
