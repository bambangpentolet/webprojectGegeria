<?php
// include database connection file
include_once("koneksiCrud_input_data_siswa.php");

// Get id from URL to delete that user
$id = $_GET['nis'];

// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM siswa WHERE nis=$nis");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:dataSiswa.php");
?>