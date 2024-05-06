<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</head>

<body>
    <?php include('navbar.php'); ?>

    <div class="container mt-5">

        <h2>Data Formulir</h2>
        <p>Berikut adalah data yang sudah terdaftar</p>

        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Handphone</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'koneksi.php';
                $data = mysqli_query($koneksi, "SELECT * FROM data");
                $no = 0;
                while ($baris = mysqli_fetch_array($data)) {
                    $no++;
                ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $baris['nama']; ?></td>
                        <td><?= $baris['email']; ?></td>
                        <td><?= $baris['handphone']; ?></td>
                        <td>
                            <a class="btn btn-warning" href="edit.php?no=<?= $baris['no'] ?>">EDIT</a>
                            <a class="btn btn-danger" href="hapus.php?no=<?= $baris['no'] ?>">HAPUS</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>


</html>