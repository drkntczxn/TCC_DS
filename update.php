<?php
include "connection.php";

$id = $_POST['ID_CLI'];
$nome = $_POST['NOMECLI'];
$email = $_POST['EMAIL'];
$cpf = $_POST['CPFCLI'];


$sql = "UPDATE tbcliente SET
NOMECLI = '$nome',
EMAIL = '$email',
CPFCLI = '$cpf'
WHERE ID_CLI = $id";

mysqli_query($con, $sql);

header("Location: staff.php");
?>