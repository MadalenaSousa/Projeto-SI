<?php

session_start();

include dirname(__FILE__) . '/../database-data-functions/restaurante-data.php';
include dirname(__FILE__) . '/../database-data-functions/desconto-data.php';

$valor = $_POST['valor'];
$lifetime = $_POST['days'];
$nClientes = $_POST['nClientes'];
$restauranteId = $_SESSION['restauranteId'];

$totalGastoPorCliente = getClientsAndSpendingsByRestaurant($restauranteId);

echo '<pre>'; print_r($totalGastoPorCliente); echo '</pre>';

$clientesComDesconto = array();

for($i = 0; $i < count($totalGastoPorCliente); $i++) {
    if($i < $nClientes) {
        array_push($clientesComDesconto, $totalGastoPorCliente[$i]['cliente']);
    }
}

$descontoId = createDiscount($valor, $restauranteId, $lifetime);

foreach ($clientesComDesconto as $cliente) {
    createDiscount_Client($descontoId, $cliente, FALSE);
}

header('Location: ../discounts-restaurant.php?username=' . $_SESSION['username']);