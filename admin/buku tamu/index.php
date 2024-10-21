<?php
include '../../config/koneksi.php';

$kunjungan = bukutamu("
    SELECT buku_tamu.*, anggota.nama 
    FROM buku_tamu 
    JOIN anggota ON buku_tamu.nim = anggota.nim
");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../CSS/buku_tamu.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;1,500&display=swap"
        rel="stylesheet">
    <title>Buku Tamu</title>

    <!-- Add this JavaScript function for delete confirmation -->
    <script>
        function confirmDelete(nim) {
            if (confirm("Apakah Anda yakin ingin menghapus data anggota dengan NIM " + nim + "?")) {
                return true;
            } else {
                return false;
            }
        }
    </script>
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
            <a href="../dashboard.php"><i class='bx bxs-home'></i>Dashboard</a>
            <a href="../anggota/index.php"><i class='bx bxs-user'></i>Anggota</a>
            <a href="index.php"
                style="background-color: #0B85AE; color: white; border-radius: 0 20px 20px 0; position: relative; left: -20px; padding-left: 40px;"><i
                    class='bx bxs-book'></i>Buku Tamu</a>
        </div>
        <div class="akhir">
            <a href="logout.php"><i class='bx bxs-log-out'></i> Keluar</a>
        </div>
    </section>

    <!-- tabel -->
    <section class="content">
        <table>
            <thead>
                <tr>
                    <th colspan="8">Data Buku Tamu</th>
                </tr>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Tanggal</th>
                    <th>Jam Masuk</th>
                    <th>Jam Keluar</th>
                    <th>Keperluan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($kunjungan as $row): ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $row["nim"] ?></td>
                        <td><?= $row["nama"] ?></td>
                        <td><?= $row["tanggal"] ?></td>
                        <td><?= $row["jam_masuk"] ?></td>
                        <td><?= $row["jam_keluar"] ?></td>
                        <td><?= $row["keperluan"] ?></td>
                        <td class="aksi">
                            <a href="edit.php?id=<?= $row['id']; ?>" class="edit"><i class='bx bx-edit'></i></a>
                            <form action="CRUD/delete.php" method="get"
                                onsubmit="return confirmDelete('<?= $row['id']; ?>')">
                                <input type="hidden" name="id" value="<?= $row['id']; ?>">
                                <button type="submit" class="hapus"><i class='bx bx-trash'></i></button>
                            </form>
                        </td>
                    </tr>
                    <?php $no++; ?>
                <?php endforeach ?>
            </tbody>
        </table>
    </section>
</body>

</html>