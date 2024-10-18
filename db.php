<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "zhafran_ocean_fresh";
    $port = 3306;

    $conn = mysqli_connect($host, $user, $password, $db, $port);

    if (!$conn) {
        die ("Koneksi anda gagal coba lagi: " . mysqli_connect_error());
    }
?>