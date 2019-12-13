<?php

session_start();

include dirname(__FILE__) . '/../database-data-functions/encomenda-data.php';

$local = $_POST['local'];

if(!empty($_POST['desconto'])) {
    $desconto = $_POST['desconto'];
} else {
    $desconto = null;
    echo $desconto;
}

$data = date("Y.m.d");
$username = $_SESSION['username'];

$encomendaId = createOrder($data, $local, $desconto, 1, $username);

foreach ($_SESSION['pratos'] as $comida) {
    createOrder_Food($encomendaId, $comida['id'], $comida['quantity']);
}

header('Location: ../order-result.php');