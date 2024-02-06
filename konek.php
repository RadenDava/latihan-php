<?php

//deklasrasi variabel
$db_host = "localhost";
$db_user = "root";
$db_pass = "dava123";
$db_name = "db_goovy";    

$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if($connection) {
    echo "Konek ges";
} else {
    echo "Konek Gagal! : ". mysqli_connect_error();
}

?>


