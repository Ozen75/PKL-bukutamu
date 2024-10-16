<?php 
    include'../../koneksi.php';

    $anggota = anggota("SELECT * FROM anggota")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../CSS/anggota-index.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;1,500&display=swap" rel="stylesheet">
    <title>Buku Tamu</title>
</head>
    <body>
        <!-- Navbar -->
        <section class="navbar">
            <div class="nama_admin">
                <h1>Admin</h1>
                <img src="../../Images/user2.png" alt="nama_admin" class="img_admin">
            </div>
        </section>

        <!-- sidebar -->
        <section class="sidebar">
            <div class="logo">
                <img src="../../Images/logo_pro_asta.png" alt="logo" class="logo_asta">
                <h1>Buku Tamu</h1>
            </div>
            <div class="menu" id="menu">    
                <a href="../"><i class='bx bxs-home'></i>Dashboard</a>
                <a href="index.php"><i class='bx bxs-user'></i>Anggota</a>
                <a href="buku_tamu.php"><i class='bx bxs-book'></i>Buku Tamu</a>
            </div>
            <div class="akhir">
                <a href="logout.php"><i class='bx bxs-log-out' ></i> Keluar</a>
            </div>
        </section>

        <!-- tabel -->
        <section class="content">
                <a href="tambah.php" class="tombol">Tambah</a>
            <table>
                <thead>
                    <tr>
                        <th colspan="9">Data Anggota</th>
                    </tr>
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>No. Telp</th>
                        <th>Alamat</th>
                        <th>Prodi</th>
                        <th>Angkatan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach( $anggota as $row ): ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $row["nim"]?></td>
                        <td><?= $row["nama"]?></td>
                        <td><?= $row["jenis_kelamin"]?></td>
                        <td><?= $row["no_telp"]?></td>
                        <td><?= $row["alamat"]?></td>
                        <td><?= $row["prodi"]?></td>
                        <td><?= $row["angkatan"]?></td>
                        <td class="aksi">
                            <a href="edit.php" class="edit"><i class='bx bx-edit'></i></a>
                            <a href="hapus.php" class="hapus"><i class='bx bx-trash'></i></a>
                        </td>
                    </tr>
                    <?php $no++; ?>
                    <?php endforeach ?>
                </tbody>
            </table>
        </section>
    </body>
</html>