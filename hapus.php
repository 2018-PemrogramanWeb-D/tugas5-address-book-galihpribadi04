<?php

include("config.php");

if( isset($_GET['id']) ){

    $id = $_GET['id'];

    $sql = "DELETE FROM book WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if( $query ){
        header('Location: list_warga.php');
    } else {
        die("failed to delete data");
    }

} else {
    die("akses dilarang...");
}

?>