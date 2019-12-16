<?php

session_start();

include 'actions/is-logged.php';
include 'actions/is-client.php';

?>

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
include 'database-data-functions/restaurante-data.php';

$desconto = getDiscountByClient($_SESSION['username']);

?>

<main class="grid-welcome">

    <?php

    foreach ($desconto as $desc) {

        echo '<span>Value: ' . $desc['valor_desconto'] . '%</span>';
        echo '<span>Expiration Date: ' . $desc['validade'] . '</span>';
        echo '<span>Used: ' . $desc['usado'] . '</span>';
        echo '<span>Restaurant: ' . getRestaurantById($desc['restaurante_id'])['nome'] . '</span>';
    }

    ?>

</main>

<script src="javascript/geral.js"></script>
</body>
</html>