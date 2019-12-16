<?php

session_start();

include 'actions/is-logged.php';
include 'actions/is-client.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LDMEats | Cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/icon-logo.png">
</head>
<body>

    <?php
        include 'database-data-functions/comida-data.php';
        include 'database-data-functions/restaurante-data.php';
    ?>


<header>
    <?php include 'header.php'; ?>
</header>

<main class="grid-welcome">

    <div class="grid">
        <div><h2>Nome do Prato</h2></div>
        <div><h2>Quantidade</h2></div>
        <div><h2>Preço</h2></div>
        <div><h2>Eliminar</h2></div>
    </div>

    <?php

    if(isset($_SESSION['pratos'])) {
        foreach($_SESSION['pratos'] as $comida) {
            echo '
                <div class="grid">
                    <div>' . $comida['title'] . '</div>
                    <div>' . $comida['quantity'] . '</div>
                    <div>' . $comida['price'] . '</div>
                    <form method="post" action="actions/remove-cart-item.php">
                        <input type="hidden" value="' . $comida['id'] . '" name="id">
                        <input type="submit" value="X">
                    </form>
                </div>';
        }
    }
    ?>

    <div class="grid">
        <form method="post" action="actions/clear-cart.php">
            <input class="button" type="submit" value="Clear Cart">
        </form>

        <a href="order-info.php">
            <button class="button">Checkout</button>
        </a>
    </div>

</main>

<script src="javascript/geral.js"></script>
</body>
</html>