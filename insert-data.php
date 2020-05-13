<?php
include "koneksi.php";

$sql = "INSERT INTO user(
        id,nama,role,availability,age,location,years_experience,email
    ) VALUE (

        '1',
        'Arkademy',
        'Frontend Developer',
        'Full time',
        '19',
        'Jakarta',
        '6',
        'fannyerisen@gmail.com'

    ) ";

if ($koneksi->query($sql) == true) {
    echo "bErhasil";
} else {
    echo "gagal";
}
