<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LDMEats | Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/style.css">

    <link rel="shortcut icon" href="images/icon-logo.png">
</head>
<body>
<header>
    <?php include('header.php'); ?>
</header>

<?php
    include 'database-data-functions/comida-data.php';
    include 'database-data-functions/utilizador-data.php';
    include 'database-data-functions/restaurante-data.php';
?>

<main class="grid-welcome">
    <?php

    if(isset($_GET['id'])) {

        $comida = getFoodById($_GET['id']);

        echo '<h4 class="modal-title">' . $comida['titulo'] . '</h4>
              <p>' . $comida['descricao'] . '</p>';
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
</main>

<script src="javascript/geral.js"></script>
</body>
</html>