<?php
session_start(); // Start session nya
// Kita cek apakah user sudah login atau belum
// Cek nya dengan cara cek apakah terdapat session username atau tidak
if( ! isset($_SESSION['username'])){ // Jika tidak ada session username berarti dia belum login 
    header("location: index.php"); // Kita Redirect ke halaman index.php karena belum login
}
?>

<?php
$host = "127.0.0.1"; // Nama hostnya
$username = "root"; // Username
$password = ""; // Password (Isi jika menggunakan password)
$database = "user"; // Nama databasenya
// Koneksi ke MySQL dengan PDO
$pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
?>