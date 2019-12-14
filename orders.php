<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LDMEats | My Orders</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/icon-logo.png">
</head>
<body>
<header>
    <?php include 'header.php'; ?>
</header>

<?php include 'database-data-functions/comida-data.php'; ?>

<main class="grid-welcome">
    <h1>My Orders</h1>

    <?php

    $pratosCliente = purchasedDishes($_GET['username']);

    foreach ($pratosCliente as $item) {
        echo '<span>
                Prato: ' . $item['titulo'] . '
                Data: ' . $item['data_encomenda'] . '
              </span>';
    }

    ?>
</main>

<script src="javascript/geral.js"></script>
</body>
</html>