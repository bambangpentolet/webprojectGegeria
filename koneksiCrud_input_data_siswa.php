<?php
/* database for crud*/
include("session.php"); // session start diambil dari sini

$host = "127.0.0.1";
$username = "root";
$password = "";
$database = "crud_db_siswa";

$mysqli = mysqli_connect($host, $username, $password, $database); 

?>