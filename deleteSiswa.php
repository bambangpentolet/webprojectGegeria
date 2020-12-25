<?php
session_start();
if( ! isset($_SESSION['username'])){
  header("location: index.php");
}
require_once("koneksiCrud_input_data_siswa.php");

if( isset($_GET['nis']) ){

    // ambil id dari query string
    $nis = $_GET['nis'];

    // buat query hapus
    $sql = "DELETE FROM siswa WHERE nis=$nis";
    $query = mysqli_query($mysqli, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: dataSiswa.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>