<?php
$base_url = "https://localhost/RETOLING/penjualan/";
date_default_timezone_set('Asia/Jakarta');
$server = "localhost";
$user = "root";
$pass = "";
$db = "db_penjualan";

$koneksi = mysqli_connect($server, $user, $pass, $db)
    or die(mysqli_connect_error());
