<?php
session_start();
require_once "list_data_mahasiswa.php";
$p = getAllData($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylemp.css">
    <title>Data Mahasiswa</title>
</head>
<style>
    table {
        margin-top: 20px;
        width: 100%;
        border-collapse: collapse;
    }

    td,
    th {
        padding: 20px;
    }

    thead {
        color: black;
        background-color: #33FFF6;
    }
</style>

<body>
    <nav>
        <div class="navbar">
            <i class='bx bx-menu'></i>
            <div class="logo"><a href="index.php">Kampus Jaya</a></div>
            <div class="nav-links">
                <div class="sidebar-logo">
                    <span class="logo-name">CodingLab</span>
                    <i class='bx bx-x'></i>
                </div>
                <ul class="links">
                    <li><a href="index.php">HOME</a></li>
                    <li>
                        <a href="#">Data Mahasiswa/Dosen</a>
                        <i class='bx bxs-chevron-down htmlcss-arrow arrow  '></i>
                        <ul class="htmlCss-sub-menu sub-menu">
                            <li><a href="datadosen.php">List Data Dosen </a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Data Kelas</a>
                        <i class='bx bxs-chevron-down js-arrow arrow '></i>
                        <ul class="js-sub-menu sub-menu">
                            <li><a href="#">Data Kelas Mahasiswa</a></li>
                            <li><a href="#">Form Validation</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Tentang Kami</a></li>
                    <li><a href="#">Hubungi Kami</a></li>
                </ul>
            </div>

        </div>
        </div>
    </nav>


    <br>
    <br>
    <br>
    <h1 class="judul">Data Mahasiswa</h1>
    <br>
    <br>
    <a href="newdatamahasiswa.php" class="tambahkan-btn">Tambahkan Data</a>


    <?php if (isset($_SESSION['BERHASIL_TAMBAH_PENDIDIKAN'])) : ?>
        <p><?= $_SESSION['BERHASIL_TAMBAH_PENDIDIKAN'] ?></p>
        <?php session_unset(); ?>
    <?php endif; ?>


    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nim</th>
                <th>Nama</th>
                <th>Prodi</th>
                <th>Jurusan</th>
                <th>Option</th>

            </tr>
        </thead>
        <tbody>

            <?php
            $no_urut = 0;
            ?>
            
            <?php foreach ($p as $k => $v) : $no_urut++; ?>

                <tr>
                    <td><?= $no_urut ?></td>
                    <td><?= $v['Nim'] ?></td>
                    <td><?= $v['Nama'] ?></td>
                    <td><?= $v['Prodi'] ?></td>
                    <td><?= $v['Jurusan'] ?></td>
                    <td>
                        <a href="<?= "/editing_mahasiswa.php?id={$v['Nim']}" ?>" class="edit-btn">Edit</a>
                        <a href="<?= "/detail_mahasiswa.php?id={$v['Nim']}" ?>" class="detail-btn">Detail</a>
                        <a href="<?= "/delete_index_mahasiswa.php?id={$v['Nim']}" ?>" class="hapusbtn">Hapus</a>
                        
                    </td>
                <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>

<?php
mysqli_close($conn);
?>