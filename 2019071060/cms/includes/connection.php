<?php
    // membuat koneksi ke database
    $conn = mysqli_connect("localhost","root","","db_my_portofolio");

    // Check connection
    if (mysqli_connect_errno()){
        echo "Koneksi database gagal : " . mysqli_connect_error();
    }
?>