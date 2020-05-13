<?php 
    include "koneksi.php";

    if (isset($_POST['submit'])) {
        $id_user = $_POST["id_user"];
        $nama = $_POST["nama"];
        $role = $_POST["role"];
        $availability = $_POST["Availability"];
        $age = $_POST["age"];
        $location = $_POST["Location"];
        $experience = $_POST["Years"];
        $email = $_POST["email"];

        $sql ="UPADATE user SET nama = '$nama', role = '$role ', availability = '$availability', age = '$age', location = '$location', years_experience = '$experience', email = '$email' WHERE id='$id_user'";

        if ($koneksi->query($sql)== TRUE) {
            echo   "berhasil";
            # code...
        }
        else {
            echo "gagal";
        }
    }

?>