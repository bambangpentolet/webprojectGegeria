<?php
session_start(); // Start session nya
// Kita cek apakah user sudah login atau belum
// Cek nya dengan cara cek apakah terdapat session username atau tidak
if( ! isset($_SESSION['username'])){ // Jika tidak ada session username berarti dia belum login 
    header("location: index.php"); // Kita Redirect ke halaman index.php karena belum login
}
?>

<html>
<head>
<title> Modularitas </title>
</head>
<body>
<?php
// Modularitas

 ?>
<a href = "welcome.php">Home</a>
<a href = "dataSiswa.php">Data Siswa</a>

</body>
</html>