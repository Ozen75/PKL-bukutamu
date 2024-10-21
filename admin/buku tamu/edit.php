<?php
session_start();
include '../../config/koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the anggota row by ni  m
    $kunjungan = bukutamu("SELECT * FROM buku_tamu WHERE id = '$id'");
}
$anggota = anggota("SELECT * FROM anggota")

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../CSS/buku_tamu.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Edit Anggota</title>
</head>

<body>
    <!-- Navbar -->
    <section class="navbar">
        <div class="nama_admin">
            <h1>Admin</h1>
            <img src="../../Images/user2.png" alt="nama_admin" class="img_admin">
        </div>
    </section>

    <!-- Sidebar -->
    <section class="sidebar">
        <div class="logo">
            <img src="../../Images/logo_pro_asta.png" alt="logo" class="logo_asta">
            <h1>Buku Tamu</h1>
        </div>
        <div class="menu" id="menu">
            <a href="../"><i class='bx bxs-home'></i>Dashboard</a>
            <a href="../anggota/index.php"><i class='bx bxs-user'></i>Anggota</a>
            <a href="index.php"><i class='bx bxs-book'></i>Buku Tamu</a>
        </div>
        <div class="akhir">
            <a href="logout.php"><i class='bx bxs-log-out'></i> Keluar</a>
        </div>
    </section>

    <!-- Form Section -->
    <section class="content_edit">
        <h2>Edit Anggota</h2>
        <form action="CRUD/update.php" method="POST" class="form-anggota">
            <input type="hidden" name="id" value="<?= $kunjungan[0]["id"]; ?>">
            <div class="form-group">
                <label for="nim">NIM</label>
                <select name="nim" id="nim">
                    <?php foreach ($anggota as $row): ?>
                    <option value="<?= $row["nim"]?>"><?= $row["nim"]?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="date" name="tanggal" id="tanggal" value="<?= $kunjungan[0]["tanggal"]; ?>">
            </div>
            <div class="form-group">
                <label for="jam_masuk">Jam Masuk</label>
                <input type="time" name="jam_masuk" id="jam_masuk" value="<?= substr($kunjungan[0]["jam_masuk"], 0, 5); ?>">
            </div>
            <div class="form-group">
                <label for="jam_keluar">Jam Keluar</label>
                <input type="time" name="jam_keluar" id="jam_keluar" value="<?= substr($kunjungan[0]["jam_masuk"], 0, 5); ?>">
            </div>
            <div class="form-group">
                <label for="keperluan">Keperluan</label>
                <input type="text" name="keperluan" id="keperluan" value="<?= $kunjungan[0]["keperluan"]; ?>">
            </div>
            <button type="submit" class="tombol-submit">Ubah Data</button>
        </form>
    </section>
</body>

</html>