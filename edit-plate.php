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

    if ($_SESSION['tipo'] != 'admin' && isset($_GET['id'])) {

        $comida = getFoodById($_GET['id']);

        ?>
        <form method="post" action="actions/save-plate.php">
            <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
            <input type="text" name="titulo" value="<?php echo $comida['titulo'] ?>">
            <input type="text" name="descricao" value="<?php echo $comida['descricao'] ?>">
            <input type="text" name="preco" value="<?php echo $comida['preco'] ?>">
            <input type="submit" class="button" value="Save plate">
        </form>

    <?php
    }
    ?>
</main>

<script src="javascript/geral.js"></script>
</body>
</html>