<?php
session_start();
include '../../koneksi.php';

if (isset($_GET['nim'])) {
    $nim = $_GET['nim'];

    // Fetch the anggota row by nim
    $anggota = anggota("SELECT * FROM anggota WHERE nim = '$nim'");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../CSS/anggota-index.css" />
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
            <a href="index.php"><i class='bx bxs-home'></i>Dashboard</a>
            <a href="index.php"><i class='bx bxs-user'></i>Anggota</a>
            <a href="buku_tamu.php"><i class='bx bxs-book'></i>Buku Tamu</a>
        </div>
        <div class="akhir">
            <a href="logout.php"><i class='bx bxs-log-out'></i> Keluar</a>
        </div>
    </section>

    <!-- Form Section -->
    <section class="content">
        <h2>Edit Anggota</h2>
        <form action="CRUD/edit.php" method="POST" class="form-anggota">
            <div class="form-group">
                <label for="nim">NIM</label>
                <input type="text" id="nim" name="nim" required value="<?= $anggota[0]["nim"]; ?>">
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama" required value="<?= $anggota[0]["nama"]; ?>">
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select name="jenis_kelamin" id="jenis_kelamin" value="<?= $anggota[0]["jenis_kelamin"]; ?>" class="form-select">
                    <option value="laki laki">Laki Laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="no_telp">No. Telp</label>
                <input type="text" id="no_telp" name="no_telp" required value="<?= $anggota[0]["no_telp"]; ?>">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" id="alamat" name="alamat" required value="<?= $anggota[0]["alamat"]; ?>">
            </div>
            <div class="form-group">
                <label for="prodi">Prodi</label>
                <select name="prodi" id="prodi" value="<?= $anggota[0]["prodi"]; ?>" class="form-select">
                    <option value="informatika">Informatika</option>
                    <option value="sistem informasi">Sistem Informasi</option>
                    <option value="teknologi informasi">Teknologi Informasi</option>
                </select>
            </div>
            <div class="form-group">
                <label for="angkatan">Angkatan</label>
                <select name="angkatan" id="angkatan" value="<?= $anggota[0]["angkatan"]; ?>" class="form-select">
                    <option value="I">I</option>
                    <option value="II">II</option>
                    <option value="II">III</option>
                </select>
            </div>
            <button type="submit" class="tombol-submit">Ubah Data</button>
        </form>
    </section>
</body>

</html>