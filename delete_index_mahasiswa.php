<?php
require_once "list_data_mahasiswa.php";

$id = $_GET["id"];
$sql = "DELETE FROM `data_mahasiswa` WHERE Nim = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
    header("Location: datamahasiswa.php?msg=Data deleted successfully");
} else {
    echo "Failed: " . mysqli_error($conn);
}
