<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data_mahasiswa_dan_dosen";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Gagal Konek ke database: " . mysqli_connect_error());
}

function getAllData($conn)
{
    $sql = "SELECT * FROM data_mahasiswa";
    $result = mysqli_query($conn, $sql);

    $data = [];

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
    }
    return $data;
}
function findmahasiswaByID($conn, $id)
{
    $sql = "SELECT * FROM data_mahasiswa WHERE Nim = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            return $row;
        }
    }

    return null;
}
function listdosen($conn, $data)
{
    $sql = "INSERT INTO data_mahasiswa (Nim,Nama, Prodi, Jurusan, created_at, updated_at)
VALUES (
'({$data['Nim']}',
'{$data['Nama']}',
'{$data['Prodi']}',
'{$data['Jurusan']}',
NOW(),
NOW()
);";

    if (mysqli_query($conn, $sql)) {
        return mysqli_insert_id($conn);
    }
    return null;
}
