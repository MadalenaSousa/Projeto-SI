<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LDMEats | Order Result</title>
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
    include 'database-data-functions/restaurante-data.php';

    $encomenda = getOrderById($_GET['id']);
    $pratos = getOrderFoodByOrderId($_GET['id']);
    $cliente = getClientByUsername($_SESSION['username']);
?>

<main class="grid-welcome">
    <h1>Your Order was Successfull!</h1>
    <div>Order Id: <?php echo $encomenda['id']; ?></div>
    <div>Delivery: <?php echo $encomenda['local_entrega']; ?></div>

    <?php foreach ($pratos as $comida) {
        $restaurante = getRestaurantById($comida['restaurante_id']);
    ?>
    <div>Plate: <?php echo $comida['titulo']; ?></div>
    <div>Price: <?php echo $comida['preco']; ?>€</div>
    <div>Restaurant: <?php echo $restaurante['nome']; ?></div>
    <?php } ?>

    <div>Total: <?php echo $encomenda['preco_total']; ?>€</div>
    <div>Total with Discount: <?php echo $encomenda['total_desconto']; ?>€</div>

    <div>Your Current Budget: <?php echo $cliente['saldo']; ?>€</div>
</main>

<script src="javascript/geral.js"></script>
</body>
</html>