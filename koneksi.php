<?php
// $host = "127.0.0.1"; // Nama hostnya
// $username = "root"; // Username
// $password = ""; // Password (Isi jika menggunakan password)
// $database = "user"; // Nama databasenya
// // Koneksi ke MySQL dengan PDO
// $pdo = new PDO("mysql:host=".$host.";dbname=".$database, $username, $password);
mysql_connect("localhost","root",""); //sesuaikan dengan password dan username mysql anda
mysql_select_db("user"); //nama database yang kita gunakan
?>