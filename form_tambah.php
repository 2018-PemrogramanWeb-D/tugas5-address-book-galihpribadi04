<!DOCTYPE html>
<html>
<head>
    <title>Address Book Add</title>
</head>

<body>
    <header>
        <h3>Form Penambahan</h3>
    </header>

    <form action="proses_input.php" method="POST">

        <fieldset>

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="Masukkan Nama" />
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat"></textarea>
        </p>
        
            <input type="submit" value="Tambah" name="tambah" />
        </p>

        </fieldset>

    </form>

    </body>
</html>
