<?php
include '../koneksi.php';


if (isset($_POST['submit'])) {
    $id_user= $_POST['id_user'];
    $nama_buku= $_POST['nama_buku'];
    $harga_buku= $_POST['harga_buku'];
    $query= mysqli_query($koneksi, "INSERT INTO `perpustakaan01`.`buku`(`id_user`, `nama_buku`, `hagra_buku`) VALUES ('$id_user', '$nama_buku', '$harga_buku')");
    echo "<script>alert('Berhasil di Input')</script>";
    header('location:../create.php');
} else {
  header('location:../');
}
