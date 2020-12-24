<?php
include("koneksiCrud_input_data_siswa.php");

if( isset($_POST['nis']) ){

    // ambil id dari query string
    $nis = $_POST['nis'];

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