<?php

include_once(dirname(__FILE__) . '/connection.php');

function createDiscount($valor, $restauranteId, $lifetime) {
    $query = pg_query(getDBConnection(), "INSERT INTO desconto (valor_desconto, restaurante_id, validade)
                                               VALUES ('" . $valor . "', '" . $restauranteId . "', CURRENT_DATE + " . $lifetime . ")");

    if(pg_affected_rows($query) == 1) {
        $discountId = pg_fetch_all(pg_query(getDBConnection(), "SELECT MAX(id) FROM desconto"))[0]['max'];
    } else {
        $discountId = -1;
    }

    return $discountId;
}

function createDiscount_Client($discountId, $client, $usado) {
    if($usado == FALSE) {
        return pg_query(getDBConnection(), "INSERT INTO cliente_desconto (cliente_utilizador_username, desconto_id, usado)
                                              VALUES ('" . $client . "', '" . $discountId . "', FALSE)");
    } else {
        return pg_query(getDBConnection(), "INSERT INTO cliente_desconto (cliente_utilizador_username, desconto_id, usado)
                                              VALUES ('" . $client . "', '" . $discountId . "', TRUE)");
    }
}

function getDiscountByRestaurant($restaurantId) {
    return pg_fetch_all(pg_query(getDBConnection(), "SELECT * FROM desconto WHERE desconto.restaurante_id = '" . $restaurantId . "'"));
}

function getDiscountByClientAndRestaurant($cliente, $restaurantId) {
    return pg_fetch_all(pg_query(getDBConnection(),
         "SELECT desconto.valor_desconto 
               FROM desconto, cliente_desconto 
               WHERE cliente_desconto.cliente_utilizador_username = '" . $cliente . "'
               AND desconto.restaurante_id = '" . $restaurantId . "'
               AND cliente_desconto.usado = false
               AND desconto.id = cliente_desconto.desconto_id
               AND desconto.validade > CURRENT_DATE
               ORDER BY desconto.validade ASC"));
}