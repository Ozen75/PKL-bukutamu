<?php
include 'config/koneksi.php';
$anggota = anggota("SELECT * FROM anggota");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/index_user.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;1,500&display=swap"
        rel="stylesheet">
    <title>Identitas</title>
</head>

<body>
    <section class="container">
        <h1>Silahkan Pilih Nama Anda</h1>
        <div class="card">
            <?php foreach ($anggota as $row): ?>
                <!-- Tambahkan nim sebagai parameter di URL -->
                <a href="sebut_keperluan.php?nim=<?= $row['nim']; ?>">
                    <button class="data_nama"><?= $row["nama"] ?></button>
                </a>
            <?php endforeach; ?>
        </div>
    </section>

</body>

</html>