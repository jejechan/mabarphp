<?php
include '../koneksi.php';


if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $id_user= $_POST['id_user'];
    $nama_buku= $_POST['nama_buku'];
    $harga_buku= $_POST['harga_buku'];
    $query= mysqli_query($koneksi, "UPDATE `perpustakaan01`.`buku` SET `id_user`='$id_user',`nama_buku`='$nama_buku',`hagra_buku`='$harga_buku' WHERE `id`=$id");
    echo "<script>alert('Berhasil di Update')</script>";
    header('location:../read.php');
} else {
  header('location:../');
}
