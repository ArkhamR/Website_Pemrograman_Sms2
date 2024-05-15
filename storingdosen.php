<?php
require_once "list_data_dosen.php";
session_start();


$n = listdosen( $conn, $_POST);

mysqli_close($conn);

if (is_null($n)) {
    $_SESSION['BERHASIL_TAMBAH_DATA_DOSEN'] = "Gagal Menambah Data";
} else {
    $_SESSION['BERHASIL_TAMBAH_DATA_DOSEN'] = "Berhasil menambah data Nim: {$_POST['Nid']}, 
    Nama: {$_POST['Nama']}, Bidan_Keahlian: {$_POST['Bidan_Keahlian']}, Jabatan_Akademik: {$_POST['Jabatan_Akademik']}";
}

header("Location: datadosen.php");
die();