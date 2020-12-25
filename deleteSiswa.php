<?php
include_once("koneksiCrud_input_data_siswa.php");
include("session.php"); // session start diambil dari sini

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