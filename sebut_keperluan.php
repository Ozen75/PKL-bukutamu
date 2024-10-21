<?php
include 'config/koneksi.php';

if (isset($_GET['nim'])) {
    $nim = $_GET['nim'];
    $anggota = anggota("SELECT * FROM anggota WHERE nim = '$nim'");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pro.ASTA</title>
    <link rel="stylesheet" href="CSS/index.css">
</head>

<body>

    <div class="container">
        <div class="logo">
            <img src="images/logo_pro_asta.png" alt="Pro.ASTA Logo">
        </div>
        <form class="card" action="admin/buku tamu/CRUD/tambah_aksi.php" method="POST">
            <a href="pilih_identitas.php"><button class="btn identity"
                    value="<?= $anggota[0]['nim']; ?>"><?= $anggota[0]["nama"]; ?></button></a>
            <input type="hidden" name="nim" value="<?= $anggota[0]['nim']; ?>">
            <input type="hidden" name="tanggal" value="<?= date('Y-m-d'); ?>"> <!-- Tanggal otomatis -->
            <input type="hidden" name="jam_masuk" value="<?= date('H:i:s'); ?>"> <!-- Waktu otomatis untuk jam masuk -->
            <div class="kebutuhan">
                <input type="text" name="keperluan" id="keperluan" placeholder="Isi Keperluan" required>
            </div>
                <button class="btn masuk" type="submit">Masuk</button>
        </form>
    </div>
</body>

</html>