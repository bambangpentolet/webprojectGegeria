<?php
// Create database connection using config file
include_once("koneksiCrud_input_data_siswa.php");
include("modularitas.php"); // session start diambil dari sini

// Fetch all siswa data from database
$result = mysqli_query($mysqli, "SELECT * FROM siswa ORDER BY nis DESC");
$no_urut = 0;
?>

<html>
<head>    
    <title>Data Siswa</title>
</head>

<body>
<h3>Data Siswa yang ikut PSG</h3>
<a href="tambahSiswa.php">Tambah Siswa +</a><br/><br/>
    <table width='50%' border=1>

    <tr>
    <th>No.</th> <th>NIS</th> <th>Nama</th> <th>Alamat</th> <th>Jurusan</th> <th>Aksi</th>
    </tr>
    <?php  
    while($datasiswa = mysqli_fetch_array($result)) {         
        $no_urut++;
        echo "<tr>";
        echo "<td>$no_urut</td>";
        echo "<td>".$datasiswa['nis']."</td>";
        echo "<td>".$datasiswa['nama']."</td>";
        echo "<td>".$datasiswa['alamat']."</td>";
        echo "<td>".$datasiswa['jurusan']."</td>";    
        echo "<td><a href='editSiswa.php?nis=$datasiswa[nis]'>Edit</a> | <a href='deleteSiswa.php?nis=$datasiswa[nis]'>Hapus</a></td></tr>";
    }
    ?>
    </table>
</body>
</html>