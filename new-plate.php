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
    <?php include('header.php'); ?>
</header>
<main class="grid-welcome">
        <h1>Fill information about the new food item you want to add</h1>
        <form method="post" action="actions/create-plate.php">
            <label><input placeholder="Name" type="text" name="name" required></label><br>
            <br>
            <label><input placeholder="Description" type="text" name="descricao" required></label><br>
            <br>
            <label><input placeholder="Price" type="text" name="preco" required></label><br>
            <br>
            <label><input placeholder="Picture" type="text" name="foto" required></label><br>
            <br>
            <input type="submit" class="button" value="ADD">
        </form>
</main>

<script src="javascript/geral.js"></script>
</body>
</html>
