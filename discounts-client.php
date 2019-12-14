<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LDMEats | My Discounts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/icon-logo.png">
</head>
<body>
<header>
    <?php include 'header.php'; ?>
</header>

<?php

include 'database-data-functions/desconto-data.php';

$desconto = getDiscountByClient($_GET['username'])

?>

<main class="grid-welcome">

    <div><?php echo '<pre>' . print_r($desconto) . '</pre>'; ?></div>

</main>

<script src="javascript/geral.js"></script>
</body>
</html>