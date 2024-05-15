<?php
require_once "list_data_mahasiswa.php";
session_start();


$n = listdosen($conn, $_POST);

mysqli_close($conn);

if (is_null($n)) {
    $_SESSION['BERHASIL_TAMBAH_DATA_MAHASISWA'] = "Gagal Menambah Data";
} else {
    $_SESSION['BERHASIL_TAMBAH_DATA_MAHASISWA'] = "Berhasil menambah data Nim: {$_POST['Nim']}, 
    Nama: {$_POST['Nama']}, Prodi: {$_POST['Prodi']}, Jurusan: {$_POST['Jurusan']}";
}


header("Location: datamahasiswa.php");
die();