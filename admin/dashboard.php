<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/dashboard.css" />
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
            <img src="../Images/user2.png" alt="nama_admin" class="img_admin">
        </div>
    </section>

    <!-- sidebar -->
     <section class="sidebar">
        <div class="logo">
            <img src="../Images/logo_pro_asta.png" alt="logo" class="logo_asta">
            <h1>Buku Tamu</h1>
        </div>
        <div class="menu" id="menu">    
            <a href="dashboard.php"><i class='bx bxs-home'></i>Dashboard</a>
            <a href="anggota.php"><i class='bx bxs-user'></i>Anggota</a>
            <a href="buku_tamu.php"><i class='bx bxs-book'></i>Buku Tamu</a>
        </div>
        <div class="akhir">
            <a href="logout.php"><i class='bx bxs-log-out' ></i> Keluar</a>
        </div>
     </section>
</body>
</html>