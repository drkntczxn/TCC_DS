<?php
$con = mysqli_connect("localhost", "root", "", "bdotica", "3306");

if(!$con){
    die("Connection error: ".mysqli_connect_error());
}
?>