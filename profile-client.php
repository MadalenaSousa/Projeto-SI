<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LDMEats | Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/icon-logo.png">
</head>
<body>
<header>
    <?php include('header.php'); ?>
</header>

<main class="grid-welcome">
    <div>
        <div>
            <img src="#" alt="">
        </div>
        <div>
            <h1><?php echo $_SESSION['nome'] ?></h1>
        </div>
        <div>
            <a href="#">About</a>
            <a href="#">Favorites</a>
            <a href="#">Discounts</a>
            <a href="#">My Orders</a>
            <a href="#">Wallet</a>
            <a href="#">Messages</a>
            <a href="#">Edit Profile</a>
        </div>
    </div>
    <div>
        Recently Viewed
    </div>
    <div class="grid">
        <div>
            <img src="#" alt="">
            <h3>Nome</h3>
            <p>Localização</p>
        </div>
        <div>
            <img src="#" alt="">
            <h3>Nome</h3>
            <p>Localização</p>
        </div>
        <div>
            <img src="#" alt="">
            <h3>Nome</h3>
            <p>Localização</p>
        </div>
        <div>
            <img src="#" alt="">
            <h3>Nome</h3>
            <p>Localização</p>
        </div>
    </div>
</main>
</body>
</html>