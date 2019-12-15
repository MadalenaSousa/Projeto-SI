<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LDMEats | My Orders</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/icon-logo.png">
</head>
<body>
<header>
    <?php include 'header.php'; ?>
</header>

<?php

include 'database-data-functions/comida-data.php';
include 'database-data-functions/encomenda-data.php';

?>

<main class="grid-welcome">
    <h1>My Orders</h1>

    <?php

    $pratosCliente = purchasedDishes($_GET['username']);

    foreach ($pratosCliente as $item) {
        echo '<div>
                  Order Id:' . $item['id'] .
                  '<span>
                    Plate: ' . $item['titulo'] . '
                    Order Date: ' . $item['data_encomenda'] . '
                  </span>
              </div>';
    }

    ?>
</main>

<script src="javascript/geral.js"></script>
</body>
</html>