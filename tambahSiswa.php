<html>
<head>
    <title>Tambah Siswa</title>
</head>

<body>
    <a href="dataSiswa.php">kembali ke Data Siswa</a>
    <br/><br/>

    <form action="tambahSiswa.php" method="post" name="form1">
        <table width="25%" border="0">
        <tr> 
                <td>NIS</td>
                <td><input type="text" name="nis"></td>
            </tr>
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr> 
                <td>Jurusan</td>
                <td><input type="text" name="jurusan"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $jurusan = $_POST['jurusan'];

        // include database connection file
        include_once("koneksiCrud_input_data_siswa.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO siswa(nis,nama,alamat,jurusan) VALUES('$nis','$nama','$alamat','$jurusan')");

        // Show message when user added
        echo "User added successfully. <a href='dataSiswa.php'>Lihat Daftar Siswa</a>";
    }
    ?>
</body>
</html>