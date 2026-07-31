<?php
$con = mysqli_connect("localhost", "root", "", "carwash", "3308");

if(!$con){
    die("Connection error: ".mysqli_connect_error());
}
?>