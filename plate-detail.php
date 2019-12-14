<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LDMEats | Plate Detail</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/style.css">

    <link rel="shortcut icon" href="images/icon-logo.png">
</head>
<body>
<header>
    <?php include('header.php'); ?>
</header>

<?php include 'database-data-functions/comida-data.php'; ?>
<?php include 'database-data-functions/restaurante-data.php'; ?>

<main class="grid-welcome">
    <?php

    if (isset($_GET['id'])) {
        $comida = getFoodById($_GET['id']);

        $restaurante = getRestaurantById($comida['restaurante_id']);

        echo '<h4 class="modal-title">' . $comida['titulo'] . '</h4>
              <span>Description: ' . $comida['descricao'] . '</span> 
              <span>Price: ' . $comida['preco'] . '</span> 
              <span>Restaurant: ' . $restaurante['nome'] . '</span>';

    }
    ?>
    <form method="post" action="actions/add-cart.php">
        <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
        <input type="hidden" name="compra-imediata" value="0">
        <input type="submit" class="button" value="Add To Cart">
    </form>

    <form method="post" action="actions/add-cart.php">
        <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
        <input type="hidden" name="compra-imediata" value="1">
        <input type="submit" class="button" value="Instant Buy">
    </form>

    <?php
    if ($_SESSION['tipo'] == 1 ) {
        echo '
        <form method="get" action="edit-plate.php">
            <input type="submit" class="button" value="Edit Plate">
            <input type="hidden" name="id" value="'.$_GET['id'].'">
        </form>
        ';
    }
    ?>
</main>

<script src="javascript/geral.js"></script>
</body>
</html>