<?php
include("modularitas.php"); // session ambil dari sini
?>
<html>
<head>
  <title>Halaman Setelah Login</title>
</head>
<body>
  <h1>Selamat datang <?php echo $_SESSION['nama']; ?></h1>
  <h4>Anda berhasil login ke dalam aplikasi</h4>

  <form method="post" action="logout.php">
  <button type="submit" style="color:red">Logout</button>
  </form>

</body>
</html>