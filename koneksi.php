<?php
$localhost = "localhost:8111";
$username = "root";
$password = "";
$dbname = "db_userpc";

$koneksi = mysqli_connect($localhost, $username, $password, $dbname);

if(!$koneksi) {
    die("Koneksi Gagal : " . mysqli_connect_error());
} else {
    echo "Koneksi Berhasil";
}
?>