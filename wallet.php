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

<?php include 'actions/get-logged-client-user-info.php' ?>

<main class="grid-welcome">
    <h1>My Budget</h1>
    <p><?php echo "My Full Budged: " . $user['saldo'] ?></p>
    <p><?php echo "How much I've Spent: "?></p>
    <p><?php echo "My Available Budged: "?></p>
</main>

<script src="javascript/geral.js"></script>
</body>
</html>