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

$encomenda = createOrder($data, $local, $desconto, 1, $username);

foreach ($_SESSION['pratos'] as $comida) {
    createOrder_Food($encomenda['id'], $_SESSION['username'], $comida['id']);
}

print_r($encomenda);

echo '<pre>'; print_r($_SESSION); echo '</pre>';

//header('Location: ../order-result.php');