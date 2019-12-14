<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LDMEats | Create Plate</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/icon-logo.png">
</head>
<body>

<header>
    <?php include 'header.php'; ?>
</header>

<main class="grid-welcome">
    <h1>Fill information about your order</h1>
    <form method="post" action="actions/make-order.php">
        <label><input placeholder="Local de Entrega" type="text" name="local" required></label><br>
        <br>
        <label><input placeholder="Desconto" type="text" name="desconto"></label><br>
        <br>
        <input type="submit" class="button" value="Finish Order">
    </form>
</main>

<script src="javascript/geral.js"></script>
</body>
</html>
