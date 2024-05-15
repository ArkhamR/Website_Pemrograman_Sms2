<?php
require_once "list_data_mahasiswa.php";

$id = $_GET['id'];

$v = findmahasiswaByID($conn, $id);
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
    <h1 class="judul-new">Riwayat Data Detail</h1>

    

    <br>
    <br>

    <div class="paragraf">
    <p>Nim : <?= $v['Nim'] ?></p>
    <p>Nama : <?= $v['Nama'] ?></p>
    <p>Prodi : <?= $v['Prodi'] ?></p>
    <p>Jurusan : <?= $v['Jurusan'] ?></p>
    <p>Created At : <?= $v['created_at'] ?></p>
    <p>Updated At : <?= $v['updated_at'] ?></p>
    </div>
<br>
    <a href="Datamahasiswa.php" class="back-btn">Kembali ke mahasiswa</a>
</body>

</html>

<?php
mysqli_close($conn);
?>