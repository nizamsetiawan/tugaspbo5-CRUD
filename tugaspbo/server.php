<?php 
$host = "localhost";
$user = "root";
$pass = "";
$database = "pbo5_crud";

//Menghubungkan ke database
$conn = mysqli_connect($host, $user, $pass, $database);

mysqli_select_db($conn, $database);
?>