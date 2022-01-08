<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "natar";

$conn = mysqli_connect($server, $user, $pass, $database);
if(!$conn){
   die("<script>alert('connection failed.')</script>");
}

session_start();
?>
