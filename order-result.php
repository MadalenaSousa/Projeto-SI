<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LDMEats | Wallet</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/icon-logo.png">
</head>
<body>
<header>
    <?php include 'header.php'; ?>
</header>

<?php

    include 'database-data-functions/encomenda-data.php';
    include 'database-data-functions/cliente-data.php';

    $encomenda = getOrderById($_GET['id']);
    $pratos = getOrderFoodByOrderId($_GET['id']);
    $cliente = getClientByUsername($_SESSION['username']);
?>

<main class="grid-welcome">
    <div>Your Order was Successfull!</div>
    <div><?php echo '<pre>Cliente: '; print_r($cliente); echo '</pre>';?></div>
    <div><?php echo '<pre>Encomenda: '; print_r($encomenda); echo '</pre>';?></div>
    <div><?php echo '<pre>Pratos: '; print_r($pratos); echo '</pre>';?></div>
    <form method="post" action="actions/confirm-order.php">
        <input type="submit" value="Finish Order">
    </form>
</main>

<script src="javascript/geral.js"></script>
</body>
</html>