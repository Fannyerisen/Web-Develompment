<?php 
    include "koneksi.php";

    $sql ="CREATE DATABASE profile";

    if($koneksi->query($sql)== TRUE){
        echo "database bisa dibuat";
    }
    else
    {
        echo " database gagal dibuat";
    }


    ?>
