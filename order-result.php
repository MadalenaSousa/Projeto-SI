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

<main class="grid-welcome">
    <div>Your Order was Successfull!</div>
    <div><?php echo '<pre>'; print_r($_SESSION['pratos']); echo '</pre>';?></div>
    <form method="post" action="actions/confirm-order.php">
        <input type="submit" value="Finish Order">
    </form>
</main>

<script src="javascript/geral.js"></script>
</body>
</html>