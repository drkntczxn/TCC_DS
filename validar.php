<?php
session_start();
include "connection.php";

$usuario = trim($_POST['u'] ?? '');
$senha   = $_POST['s'] ?? '';

if ($usuario === '' || $senha === '') {
    echo "erro";
    exit;
}

// Prepared statement evita SQL Injection no login
$stmt = mysqli_prepare($con, "SELECT ID_CLI, NOMECLI, SENHACLI FROM tbcliente WHERE EMAIL = ? LIMIT 1");
mysqli_stmt_bind_param($stmt, "s", $usuario);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_assoc($result);

if ($row && password_verify($senha, $row['SENHACLI'])) {

    $_SESSION['cliente_id']   = $row['ID_CLI'];
    $_SESSION['cliente_nome'] = $row['NOMECLI'];

    echo "ok";

} else {

    echo "erro";

}
