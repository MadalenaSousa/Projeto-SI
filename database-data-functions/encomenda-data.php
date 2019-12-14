<?php

include_once(dirname(__FILE__) . '/connection.php');

function createOrder($data, $local, $status, $cliente, $total, $totalDesconto) {

    $query = pg_query(getDBConnection(), "INSERT INTO encomenda(data_encomenda, local_entrega, status_id, cliente_utilizador_username, preco_total, total_desconto)
                                                    VALUES ('" . $data . "', '" . $local . "', '" . $status . "', '" . $cliente . "', '" . $total . "', '" . $totalDesconto . "')");

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

function getOrderById($id) {
    return pg_fetch_array(pg_query(getDBConnection(), "SELECT * FROM encomenda WHERE encomenda.id = '" . $id . "'"));
}

function getOrderFoodByOrderId($id) {
    return pg_fetch_all(pg_query(getDBConnection(),
        "SELECT  comida.titulo, comida.preco, comida.restaurante_id, encomenda_comida.quantidade
              FROM encomenda, encomenda_comida, comida 
              WHERE encomenda.id = encomenda_comida.encomenda_id
              AND encomenda.id = '" . $id . "'
              AND comida.id = encomenda_comida.comida_id"));
}