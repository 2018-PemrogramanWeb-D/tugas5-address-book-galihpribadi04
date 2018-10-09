<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "address";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Failed to connect into database: " . mysqli_connect_error());
}

?>