<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylemp.css">
    <title>Menambahkan Data Dosen</title>
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
    <h1>Menambahkan Data Dosen</h1>
    <a href="datadosen.php" class="back-btn">Kembali ke Daftar Dosen</a>
    <div class="content">
        <form action="storingdosen.php" method="post">
            <div>
                <label>Nid</label>
                <input type="text" name="Nid">
            </div>
            <div>
                <label>Nama</label>
                <input type="text" name="Nama">
            </div>
            <div>
                <label>Bidang Keahlian</label>
                <input type="text" name="Bidan_Keahlian">
            </div>
            <div>
                <label>Jabatan Akademik </label>
                <input type="text" name="Jabatan_Akademik">
            </div>
            <div style="margin-top: 20px;">
                <input type="submit" value="Simpan" class="simpan-btn">
            </div>
        </form>
    </div>
</body>
</html>