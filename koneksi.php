<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "formulir";

$koneksi = mysqli_connect($server, $user, $password, $database);

if ($koneksi == TRUE) {
    // echo "BERHASIL TERHUBUNG KE DATABASE";
} else {
    echo "Gagal Terhubung";
}
