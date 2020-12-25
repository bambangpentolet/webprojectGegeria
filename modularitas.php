<html>
<head>
<title> Modularitas </title>
</head>
<body>
<?php
if( ! isset($_SESSION['username'])){
  header("location: index.php");
}
// Modularitas

 ?>
<a href = "welcome.php">Home</a>
<a href = "dataSiswa.php">Data Siswa</a>

</body>
</html>