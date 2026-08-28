<?php
$con = mysqli_connect("localhost", "root", "102780", "bdotica", "3306");

if(!$con){
    die("Connection error: ".mysqli_connect_error());
}
?>