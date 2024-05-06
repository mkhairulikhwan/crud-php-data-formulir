<?php
include('koneksi.php');
$no = $_GET['no'];

// echo $no;

$hapus = mysqli_query($koneksi, "DELETE FROM data WHERE no='$no'");
if ($hapus == TRUE) {
    echo "berhasil terhapus dari database";
    header("location: data.php");
} else {
    echo "Gagal terhapus";
}
