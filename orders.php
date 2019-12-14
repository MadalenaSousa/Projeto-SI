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
    <?php include 'database-data-functions/comida-data.php'; ?>
</header>
<div style="margin-top: 300px">

    <?php

    $pratosCliente = purchasedDishes($_SESSION['username']);

    foreach ($pratosCliente as $item) {

        echo '
             <a href="orders.php?username=' . $_SESSION['username'] . '">
             <p>' . $item['data_encomenda'] . '</p>
             <p>' . $item['titulo'] . '</p> 
              
            ';
    }


    ?>

    </main>
</div>
<script src="javascript/geral.js"></script>
</body>
</html>