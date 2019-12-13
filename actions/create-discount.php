<?php

include dirname(__FILE__) . '/../database-data-functions/desconto-data.php';

$valor = $_POST['valor'];
$lifetime = $_POST['lifetime'];
$nClientes = $_POST['nClientes'];
$restauranteId = $_SESSION['restauranteId'];

createDiscount($valor, $restauranteId, $lifetime);

//correr users que

createDiscount_Client(discountid, $);