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
    if (isset($_GET['comida'])) {
        //ver melhor explicaçao da lena 
        $pratosCliente = PurchasedDishes($cliente);
        $clienteComidaInfo=getFoodBYid($pratosCliente[i];
        echo '
     <a href="profile-restaurant.php?username='. $restaurante['utilizador_username'] .'">
     <p>' . $pratos['comida_id'] . '</p>
     <p>' . $pratos['cliente_utilizador_username'] . '</p> 
     <p>' . $comida['titulo'] . '</p>   
      
    ';

    }

    ?>

    </main>
</div>
<script src="javascript/geral.js"></script>
</body>
</html>