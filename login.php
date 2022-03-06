<?php
session_start();
$_SESSION['sesi'] = NULL;

include "./koneksi.php";
if (isset($_POST['submit'])) {
    $username = isset($_POST['username']) ? $_POST['username'] : "";
    $password = isset($_POST['password']) ? $_POST['password'] : "";
    $qry    = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");
    $sesi = mysqli_num_rows($qry);

    if ($sesi == 1) {
        $data_user = mysqli_fetch_array($qry);
        $_SESSION['id_user'] = $data_user['username'];
        $_SESSION['sesi'] = $data_user['nama'];
        include 'dashboard.php';
    } else {
        include 'index.php';
    }
} else {
    include "index.php";
}
