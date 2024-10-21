<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/login.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;1,500&display=swap" rel="stylesheet">
    <title>Login Admin</title>
</head>
<body>
    <section class="container">
        <div class="logo">
            <img src="../Images/logo_pro_asta.png" alt="logo">
        </div>
        <div class="card">
            <h1>Login Admin</h1>
            <form method="POST" action="../config/authentication.php">
                <input type="text" name="username" placeholder="Username" />
                <input type="password" name="password" placeholder="Password"/>
                <input type="submit" value="LOGIN">
            </form>
        </div>
    </section>
</body>
</html>