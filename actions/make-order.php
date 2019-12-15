<?php

session_start();

include dirname(__FILE__) . '/../database-data-functions/encomenda-data.php';
include dirname(__FILE__) . '/../database-data-functions/comida-data.php';
include dirname(__FILE__) . '/../database-data-functions/desconto-data.php';
include dirname(__FILE__) . '/../database-data-functions/cliente-data.php';

$local = $_POST['local'];
$data = date("Y.m.d");
$username = $_SESSION['username'];
$total = 0;
$totalDesconto = 0;
$dadosCliente = getClientByUsername($username);
$newBudget = 0;
$descontosUsados = array();

foreach ($_SESSION['pratos'] as $comida) {
    $descontoCliente = getDiscountByClientAndRestaurant($username, $comida['restaurantId']); //guarda um array de descontos e seus dados para o restaurante associado ao prato atual

    if(!empty($descontoCliente)) { //se tiver desconto
        array_push($descontosUsados, $descontoCliente[0]['id']);

        $descontoCliente = $comida['price'] * $descontoCliente[0]['valor_desconto']/100; //guarda o valor a descontar
    } else { //se não tiver
        $descontoCliente = 0; //desconto é zero
    }

    $total += $comida['price'] * $comida['quantity']; //soma o preco total dos pratos * a sua quantidade
    $totalDesconto += ($comida['price'] - $descontoCliente) * $comida['quantity']; //soma o preco total dos pratos * a sua quantidade e retira o desconto
}

$newBudget = $dadosCliente['saldo'] - $totalDesconto;
updateBudget($username, $newBudget);

$encomendaId = createOrder($data, $local, 1, $username, $total, $totalDesconto);

foreach ($_SESSION['pratos'] as $comida) {
    createOrder_Food($encomendaId, $comida['id'], $comida['quantity']);
    markFoodAsBought($comida['id']);
}

foreach ($descontosUsados as $id) {
    setDiscountAsUsed($username, $id);
}

unset($_SESSION['pratos']);

header('Location: ../order-result.php?id=' . $encomendaId);