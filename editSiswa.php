<?php
// include database connection file
include_once("koneksiCrud_input_data_siswa.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['simpan']))
{   
    $nis = $_POST['nis'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $jurusan=$_POST['jurusan'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE siswa SET nama='$nama',alamat='$alamat',jurusan='$jurusan' WHERE nis=$nis");

    // Redirect to homepage to display updated user in list
    header("Location: dataSiswa.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$nis = $_GET['nis'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM siswa WHERE nis=$nis");

while($datasiswa = mysqli_fetch_array($result))
{
    $nama = $datasiswa['nama'];
    $alamat = $datasiswa['alamat'];
    $jurusan = $datasiswa['jurusan'];
}
?>
<html>
<head>  
    <title>Edit Siswa</title>
</head>

<body>
    <a href="dataSiswa.php">kembali ke Data Siswa</a>
    <br/><br/>

    <form name="simpan" method="post" action="editSiswa.php">
        <table border="0">
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama" value=<?php echo $nama;?>></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><input type="text" name="alamat" value=<?php echo $alamat;?>></td>
            </tr>
            <tr> 
                <td>Jurusan</td>
                <td><input type="text" name="jurusan" value=<?php echo $jurusan;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['nis'];?>></td>
                <td><input type="submit" name="simpan" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>