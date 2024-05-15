<?php
require_once "list_data_dosen.php";

$id = $_GET["id"];
$sql = "DELETE FROM `data_dosen` WHERE Nid = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
    header("Location: datadosen.php?msg=Data deleted successfully");
} else {
    echo "Failed: " . mysqli_error($conn);
}
