<?php 

include('konek.php');

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = "INSERT INTO user (username, email, password) values ('$username', '$email', '$password')";

if($connection->query($query)) {
    header("location: index.php");
} else {
    echo "Login GAGAL Cuy!";
}
?>