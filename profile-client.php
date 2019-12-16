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
    <?php include 'header.php'; ?>
</header>

<main class="grid-welcome">

    <?php
        include 'database-data-functions/utilizador-data.php';
        include 'database-data-functions/cliente-data.php';

        $user = getUserByUsername($_GET['username']);
        $cliente = getClientByUsername($_GET['username']);
    ?>

    <div>
        <div>
            <img src="<?php
            if($user['foto_perfil_path'] != null) {
                echo $user['foto_perfil_path'];
            } else {
                echo "images/default-profile-pic";
            } ?>" alt="">
        </div>
        <div>
            <h1><?php echo $user['nome'] ?></h1>
        </div>

        <?php if($_SESSION['username'] == $_GET['username']) { ?>
        <div>
            <a href="discounts-client.php">Discounts</a>
            <a href="orders.php">My Orders</a>
            <a href="wallet.php">Wallet</a>
        </div>
        <?php } ?>
    </div>
</main>

<script src="javascript/geral.js"></script>
</body>
</html>