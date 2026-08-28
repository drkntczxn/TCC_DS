<?php
include "connection.php";

$nome = $_POST['nomecli'];
$email = $_POST['email'];
$cpf = $_POST['cpfcli'];



$sql = "INSERT INTO tbcliente (nomecli, email, cpfcli)
VALUES ('$nome', '$email','$cpf')";

mysqli_query($con, $sql);



header("Location: staff.php")

?>