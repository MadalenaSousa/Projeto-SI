<?php

include_once(dirname(__FILE__) . '/connection.php');

function createOrder($data, $local, $desconto, $status, $cliente) {
    return pg_query(getDBConnection(), "INSERT INTO encomenda(data_encomenda, local_entrega, desconto_id, status_id, cliente_utilizador_username)
                                              VALUES ('" . $data . "', '" . $local . "', '" . $desconto . "', '" . $status . "', '" . $cliente . "')");
}

function createOrder_Food($encomendaId, $cliente, $quantidade) {
    return pg_query(getDBConnection(), "INSERT INTO encomenda_comida(encomenda_id, comida_id, quantidade)
                                              VALUES ('" . $encomendaId . "', '" . $cliente . "', '" . $quantidade . "')");
}