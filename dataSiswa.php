<?php
// Create database connection using config file
include_once("koneksiCrud_input_data_siswa.php");
include("modularitas.php");

// Fetch all siswa data from database
$result = mysqli_query($mysqli, "SELECT * FROM siswa ORDER BY nis DESC");
?>

<html>
<head>    
    <title>Data Siswa</title>
</head>

<body>
<a href="tambahSiswa.php">Tambah Siswa</a><br/><br/>
<h3>Data Siswa yang ikut PSG</h3>
    <table width='80%' border=1>

    <tr>
        <th>NIS</th> <th>Nama</th> <th>Alamat</th> <th>Jurusan</th> <th>Update</th>
    </tr>
    <?php  
    while($datasiswa = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$datasiswa['nis']."</td>";
        echo "<td>".$datasiswa['nama']."</td>";
        echo "<td>".$datasiswa['alamat']."</td>";
        echo "<td>".$datasiswa['jurusan']."</td>";    
        echo "<td><a href='edit.php?id=$user_data[nis]'>Edit</a> | <a href='delete.php?id=$user_data[nis]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>