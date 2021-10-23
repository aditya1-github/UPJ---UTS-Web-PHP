<?php
    // membuat koneksi ke database
    $conn = mysqli_connect("localhost","root","","db_my_portofolio");

    // Check connection
    if (mysqli_connect_errno()){
        echo "Koneksi database gagal : " . mysqli_connect_error();
    }

    // query mengambil data skill
    $querySkill = "select skill_name from db_my_portofolio.tblm_skill where is_active = 1";

    // query mengambil data project => ambil screenshoot project u/ jadi grid list
    $queryProjectlist = "select id, screenshoot_project from db_my_portofolio.tblm_project tp where is_active = 1";

    // query mengambil data project => ambil detail project

    $queryProjectDetail = "select * from db_my_portofolio.tblm_project tp where id = 1;";

    $title = "";
    $desc = "";
    $client = "";
    $date = NULL;
    $service = "";

?>