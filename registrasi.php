<?php
require_once 'koneksi.php';
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = $_POST['password'];

$query_sql = "INSERT INTO tabel_user (fullname, email, password) VALUES ('$fullname', '$email', '$password')";

if(mysqli_query($koneksi, $query_sql)) {
    header("Location: index.html");
} else {
    echo "Registrasi Gagal: " . mysqli_error($koneksi);
}
?>