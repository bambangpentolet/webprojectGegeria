<?php
include("koneksiCrud_input_data_siswa.php");

$sql = mysqli_query($mysqli,"SELECT * FROM siswa WHERE nis='$_GET[nis]'");
$data = mysqli_fetch_array($sql);
?>

<html>
<head>  
    <title>Edit Data Siswa</title>
</head>

<body>
    <a href="dataSiswa.php">kembali ke Data Siswa</a>
    <br/><br/>

    <form action="" method="post">
        <table>
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $data['nama'];?>"/></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $data['alamat'];?>"/></td>
            </tr>
            <tr> 
                <td>Jurusan</td>
                <td><input type="text" name="jurusan" value="<?php echo $data['jurusan'];?>"/></td>
            </tr>
            <tr>
                <td><input type="hidden" name="nis" value="<?php echo $_GET['nis'];?>"/></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>

    <?php
    include("koneksiCrud_input_data_siswa.php");

    if(isset($_POST['update'])){

        $nama=$_POST['nama'];
        $alamat=$_POST['alamat'];
        $jurusan=$_POST['jurusan'];

        $nis = $_GET['nis'];

        mysqli_query($mysqli, "UPDATE siswa SET nama='$nama',alamat='$alamat',jurusan='$jurusan' WHERE nis='$nis'");

        echo "Data siswa telah berubah";
        echo "<meta http-equiv=refresh content=1;URL='dataSiswa.php'>";
        
    }
?>
</body>
</html>