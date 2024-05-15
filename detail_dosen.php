<?php
require_once "list_data_dosen.php";

$id = $_GET['id'];

$v = finddosenaByID($conn, $id);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylemp.css">
    <title>Detail Data<?=$v['Nama'] ?></title>
</head>

<body>
    <center>
    <h1 class="judul-new">Riwayat Data Detail<?=$v['Nama'] ?></h1>

    

    <br>
    <br>

    <div class="paragraf">
    <p>Nim : <?= $v['Nid'] ?></p>
    <p>Nama : <?= $v['Nama'] ?></p>
    <p>Prodi : <?= $v['Bidan_Keahlian'] ?></p>
    <p>Jurusan : <?= $v['Jabatan_Akademik'] ?></p>
    <p>Created At : <?= $v['created_at'] ?></p>
    <p>Updated At : <?= $v['updated_at'] ?></p>
    </div>
<br>
    <a href="Datadosen.php" class="back-btn">Kembali ke ke data Dosen</a>
</body>

</html>

<?php
mysqli_close($conn);
?>