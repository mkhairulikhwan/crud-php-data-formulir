<?php
include 'koneksi.php';
$no = $_GET['no'];
$data = mysqli_query($koneksi, "SELECT * FROM data WHERE no='$no'");
$baris = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</head>

<body>
    <?php include('navbar.php'); ?>

    <div class="container col-md-6 mt-5">

        <h2>Edit Pendaftaran</h2>
        <p>silahkan edit data dibawah ini</p>

        <form action="update.php" method="post">
            <div class="mb-3">
                <label class="form-label" for="">Nama:</label>
                <input class="form-control" value="<?= $baris['nama']; ?>" type="text" name="nama" id=""
                    placeholder="Isi Dengan nama" required>
                <input name="no" value="<?= $no; ?>" hidden>
            </div>

            <div class="mb-3">
                <label class="form-label" for="">Email:</label>
                <input class="form-control" value="<?= $baris['email']; ?>" type="email" name="email" id=""
                    placeholder="Isi Dengan email" required>
            </div>

            <div class="mb-3">
                <label class="form-label" for="">Handphone:</label>
                <input class="form-control" value="<?= $baris['handphone']; ?>" type="number" name="handphone" id=""
                    placeholder="Isi Dengan nomor" required>
            </div>

            <button class="btn btn-primary" type="submit">Simpan</button>

        </form>
    </div>
</body>

</html>