<?php
include "conexao.php";

$email = $_GET['EMAIL'] ?? "";

$sql = "SELECT ID_CLI FROM tbcliente WHERE
email_usuario='$email'";

$result = mysqli_query($con,$sql);

if(mysqli_num_rows($result) > 0) {
    echo 1 ;  //usuario existe
}else{
    echo 0 ;  //usuario não existe 
}
 ?> 