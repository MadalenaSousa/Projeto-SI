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

    <?php
        include 'database-data-functions/comida-data.php';
        include 'database-data-functions/restaurante-data.php';

        for ($i = 0; $i < count($_SESSION['pratos']); $i++) {
            $comida[$i] = getFoodById($_SESSION['pratos'][]);
        }
    ?>


<header>
    <?php include 'header.php'; ?>
</header>

<main>

    <?php print_r($_SESSION['pratos'])  ?>

</main>

<script src="javascript/geral.js"></script>
</body>
</html>