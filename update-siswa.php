<?php

include ('konek.php');

$id_siswa = $_POST ['id_siswa'];
$username = $_POST ['username'];
$email = $_POST ['email'];
$password = $_POST ['password'];

$query = "UPDATE user SET username = '$username', email = '$email', password = '$password' WHERE id_siswa = '$id_siswa'";

if ($connection->query($query)) {
    echo " Update Berhasil!";
    header("location: index.php");
} else {
    echo "Update GAGAL!";
}

?>
