<?php

include_once(dirname(__FILE__) . '/connection.php');

function createOrder($data, $local, $desconto, $status, $cliente) {

    if($desconto == null) {
        $query = pg_query(getDBConnection(), "INSERT INTO encomenda(data_encomenda, local_entrega, status_id, cliente_utilizador_username)
                                                    VALUES ('" . $data . "', '" . $local . "', '" . $status . "', '" . $cliente . "')");
    } else {
        $query = pg_query(getDBConnection(), "INSERT INTO encomenda(data_encomenda, local_entrega, desconto_id, status_id, cliente_utilizador_username)
                                                    VALUES ('" . $data . "', '" . $local . "', '" . $desconto . "', '" . $status . "', '" . $cliente . "')");
    }

    if (pg_affected_rows($query) == 1) {
        $orderId = pg_fetch_all(pg_query(getDBConnection(), "SELECT MAX(id) FROM encomenda"))[0]['max'];
    } else {
        $orderId = -1;
    }

    return $orderId;
}

function createOrder_Food($encomendaId, $comidaId, $quantidade) {
    return pg_query(getDBConnection(), "INSERT INTO encomenda_comida(encomenda_id, comida_id, quantidade)
                                              VALUES ('" . $encomendaId . "', '" . $comidaId . "', '" . $quantidade . "')");
}