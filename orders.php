<?php

session_start();

include 'actions/is-logged.php';
include 'actions/is-client.php';

?>

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

    $encomendas = getOrdersByClient($_SESSION['username']);

    foreach ($encomendas as $order) {
        echo '<div>
                  Order Id:' . $order['id'] . '
                  Order Date: ' . $order['data_encomenda'];
        echo '</div>';

              $pratos = getOrderFoodByOrderId($order['id']);

              foreach ($pratos as $item) {

                echo '<span>
                            Plate: ' . $item['titulo'] . '
                      </span>';
            };
    }

    ?>
</main>

<script src="javascript/geral.js"></script>
</body>
</html>