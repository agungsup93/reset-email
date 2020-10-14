<?php
error_reporting(0);
include "koneksi.php";

if(isset($_POST["new_pass"])){

    $email = $_POST["email"];

    $pass = md5($_POST["password"]);

    $query = mysqli_query($koneksi, "UPDATE admin SET password = '$pass' WHERE email = '$email'");

    if($query){

                mysqli_query($koneksi, "DELETE FROM reset_password WHERE id = '$id'");

    }

    echo "Password Berhasil Di Update";

}

 ?>