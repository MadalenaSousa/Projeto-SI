<?php

include_once(dirname(__FILE__) . '/connection.php');

function createDiscount($valor, $restauranteId, $lifetime) {
    return pg_query(getDBConnection(), "INSERT INTO desconto (valor_desconto, restaurante_id, lifetime)
                                              VALUES ('" . $valor . "', '" . $restauranteId . "', '" . $lifetime . "')");
}

function createDiscount_Client($discountId, $client, $usado) {
    return pg_query(getDBConnection(), "INSERT INTO cliente_desconto (cliente_utilizador_username, desconto_id, usado)
                                              VALUES ('" . $client . "', '" . $discountId . "', '" . $usado . "')");
}