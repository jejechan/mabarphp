<?php
include '../koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($koneksi,"DELETE FROM `perpustakaan01`.`buku` WHERE `id`=$id");
header("location:../read.php");
?>