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

include 'database-data-functions/desconto-data.php';
include 'database-data-functions/restaurante-data.php';

$restaurante = getRestaurantByUsername($_GET['username']);
$descontosRestaurante = getDiscountByRestaurant($restaurante['id']);

?>

<main class="grid-welcome">

    <?php

    if(!empty($descontosRestaurante)) {
        foreach ($descontosRestaurante as $desconto) {
            echo '<div>
                      <div>Desconto: ' . $desconto['id'] . '</div>';
            echo '    <div>Valor: ' . $desconto['valor_desconto'] . '%</div>
                  </div>';
        }
    }

    ?>

    <form method="post" action="actions/create-discount.php">
        <label>Value of discount (percentage): <input type="number" name="valor"></label><br>
        <label>Number of Clients to offer discount: <input type="number" name="nClientes"></label><br>
        <label>Discount Lifetime (days): <input type="number" name="days"></label><br>
        <input class="button" type="submit" value="Create">
    </form>
</main>

<script src="javascript/geral.js"></script>
</body>
</html>