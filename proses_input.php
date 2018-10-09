<?php

include("config.php");
if(isset($_POST['tambah'])){
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $sql = "INSERT INTO book (nama, alamat) VALUE ('$nama', '$alamat')";
    $query = mysqli_query($db, $sql);
    if( $query ) {
        header('Location: index.php?status=sukses');
    } else {
        header('Location: index.php?status=gagal');
    }

} else {
    die("Akses dilarang...");
}

?>