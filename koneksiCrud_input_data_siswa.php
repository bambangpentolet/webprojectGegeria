<?php
session_start(); // Start session nya
// Kita cek apakah user sudah login atau belum
// Cek nya dengan cara cek apakah terdapat session username atau tidak
if( ! isset($_SESSION['username'])){ // Jika tidak ada session username berarti dia belum login 
    header("location: index.php"); // Kita Redirect ke halaman index.php karena belum login
}
?>

<?php
/* database for crud*/

$host = "127.0.0.1";
$username = "root";
$password = "";
$database = "crud_db_siswa";

$mysqli = mysqli_connect($host, $username, $password, $database); 

?>