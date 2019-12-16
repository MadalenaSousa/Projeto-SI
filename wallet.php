<?php

session_start();

include 'actions/is-logged.php';
include 'actions/is-client.php';

?>

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
        include 'database-data-functions/utilizador-data.php';
        include 'database-data-functions/cliente-data.php';

        $user = getUserByUsername($_SESSION['username']);
        $cliente = getClientByUsername($_SESSION['username']);
    ?>

    <main class="grid-welcome">
        <h1>My Budget</h1>
        <p><?php echo "My Initial Budget: 100€"?></p>
        <p><?php echo "My Available Budget: "  . $cliente['saldo'] ?>€</p>
    </main>

<script src="javascript/geral.js"></script>
</body>
</html>