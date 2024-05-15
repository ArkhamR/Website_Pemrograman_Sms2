<?php
require_once "list_data_mahasiswa.php";
$id = $_GET['id'];

if (isset($_POST["submit"])) {
    $Nim = $_POST['Nim'];
    $Nama = $_POST['Nama'];
    $Prodi = $_POST['Prodi'];
    $Jurusan = $_POST['Jurusan'];

    $sql = "UPDATE data_mahasiswa SET `Nim`='$Nim',`Nama`='$Nama',`Prodi`='$Prodi',`Jurusan`='$Jurusan' WHERE Nim = $id";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: datamahasiswa.php?msg=Data updated successfully");
        exit;
    } else {
        echo "Failed: " . mysqli_error($conn);
    }
}

?>

<body>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <title>Update Data Mahasiswa</title>
    </head>

    <body>

        <div class="container">
            <div class="text-center mb-4">
                <h3>Edit Data Mahasiswa</h3>
                <p class="text-muted">Click update jika selesai diubah</p>
            </div>

            <?php
            $sql = "SELECT * FROM `data_mahasiswa` WHERE Nim = $id LIMIT 1";
            $result = mysqli_query($conn, $sql);
            $v = mysqli_fetch_assoc($result);
            ?>

            <div class="container d-flex justify-content-center">
                <form action="" method="post" style="width:50vw; min-width:300px;">
                    <div class="row mb-3">
                        <div class="col">
                            <label class="form-label">Nim:</label>
                            <input type="text" class="form-control" name="Nim" value="<?php echo $v['Nim'] ?>">
                        </div>

                        <div class="col">
                            <label class="form-label">Nama:</label>
                            <input type="text" class="form-control" name="Nama" value="<?php echo $v['Nama'] ?>">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Prodi:</label>
                        <input type="text" class="form-control" name="Prodi" value="<?php echo $v['Prodi'] ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jurusan:</label>
                        <input type="text" class="form-control" name="Jurusan" value="<?php echo $v['Jurusan'] ?>">
                    </div>

                    <div>
                        <button type="submit" class="btn btn-success" name="submit">Update</button>
                        <a href="index.php" class="btn btn-danger">Cancel</a>
                    </div>
                </form>
            </div>
        </div>

        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    </body>

    </html>