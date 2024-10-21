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
        <div class="card">
            <a href="pilih_identitas.php"><button class="btn identity">Pilih Identitas</button></a>
            <div class="aksi">
                <div class="masuk">
                    <h1>Jam Masuk :</h1>
                    <label for="jam_masuk">Masuk</label>
                    <input type="time" name="jam_masuk" id="jam_masuk" value="<?= substr($kunjungan[0]["jam_masuk"], 0, 5); ?>">
                </div>
                <div class="keluar">
                    <h1>Jam Keluar :</h1>
                    <label for="jam_keluar">Keluar</label>
                </div>
            </div>
        </div>
    </div>
</body>
</html>