<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "perpustakaan01";
$port = 3306;

// Buat Koneksi
$koneksi = new mysqli($hostname, $username, $password, $database, $port);

//Mengecek koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal : " . $koneksi->connect_errno . " = " . $koneksi->connect_error);
} else {
    echo "Berhasil konek ke database";
};
