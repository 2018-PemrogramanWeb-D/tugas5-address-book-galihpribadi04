<!DOCTYPE html>
<html>
<head>
    <title>Address Book Page</title>
</head>

<body>
    <header>
        <h3>ADDRESS BOOK ADDER</h3>
        <link rel="stylesheet" type="text/css" href="index.css">
    </header>

    <h4>Menu</h4>
    <nav>
        <?php if(isset($_GET['status'])): ?>
        <p>
            <?php
                if($_GET['status'] == 'sukses'){
                    echo "Penambahan identitas sukses!";
                } else {
                    echo "Penambahan gagal!";
                }
            ?>
        </p>
    <?php endif; ?>
    <ul>
        <li><a href="list_warga.php">Tambah nama dan alamat</a></li>
    </ul>
    </nav>
    </body>
</html>