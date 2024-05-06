<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$handphone = $_POST['handphone'];

// echo $nama . "<br>";
// echo $email . "<br>";
// echo $handphone . "<br>";

$submit = mysqli_query($koneksi, "INSERT INTO data (nama,email,handphone) VALUES ('$nama', '$email', '$handphone') ");

if ($submit == TRUE) {
    echo "berhasil tersimpan ke database";
    header("location: data.php");
} else {
    echo "Gagal Tersimpan";
}
