<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylemp.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Tambah Data Mahasiswa</title>
    <style>
        div {
            margin-top: 15px;
        }

        select {
            width: 100%;
            padding: 5px;
            border: 1px solid;
        }

        input[type=text] {
            width: 100%;
            border: 1px solid;
            padding: 5px;
        }

        .content {
            padding: 20px;
        }
    </style>
</head>
<body>
    <h1 class="judul-new">Tambah Data Mahasiswa</h1>
    <a href="datamahasiswa.php" class="back-btn">Kembali ke Daftar Mahasiswa</a>
    <div class="content">
        <form action="storingmahasiswa.php" method="post">
            <div>
                <label>Nim</label>
                <input type="text" name="Nim">
            </div>
            <div>
                <label>Nama</label>
                <input type="text" name="Nama">
            </div>
            <div>
                <label>Prodi</label>
                <input type="text" name="Prodi">
            </div>
            <div>
                <label>Jurusan </label>
                <input type="text" name="Jurusan">
            </div>
            <div style="margin-top: 20px;">
                <input type="submit" value="Simpan" class="simpan-btn">
            </div>
        </form>
    </div>
</body>
</html>