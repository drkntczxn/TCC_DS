<?php
include "connection.php";

$id = $_GET['ID_CLI'];
mysqli_query($con, "DELETE FROM tbcliente WHERE ID_CLI=$id");

header("Location: staff.php");
?>