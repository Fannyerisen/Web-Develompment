<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "profile";

$koneksi = new mysqli($host, $username, $password,$db);

if ($koneksi->connect_error) {
    die("koneksi database gagal");
}
 ?>