<?php

include("config.php");

if( !isset($_GET['id']) ){
    header('Location: list_warga.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM book WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Address Book Page</title>
</head>

<body>
    <header>
        <h3>ADDRESS BOOK ADDER</h3>
    </header>

    <form action="proses_edit.php" method="POST">
        <fieldset>
            <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />
        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $siswa['nama'] ?>" />
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat"><?php echo $siswa['alamat'] ?></textarea>
        </p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>
    </form>

    </body>
</html>