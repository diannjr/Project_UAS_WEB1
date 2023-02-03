<?php
require_once 'koneksi.php';
$email = $_POST["email"];
$password1 = $_POST["password"];

$query_sql = "SELECT * FROM tabel_user WHERE email = '$email' AND password = '$password'";

$result = mysqli_query($koneksi, $query_sql);

if (mysqli_num_rows($result) > 0) {
    header("Location: index.html");
} else {
    echo "<center><h1>Email atau Password Anda Salah. Silahkan Coba lagi.</h1><button><strong><a href='login.html'>Login</a></button></center>";
}