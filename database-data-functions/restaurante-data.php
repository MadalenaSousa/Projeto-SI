<?php

include_once(dirname(__FILE__) . '/connection.php');

function createRestaurant($username, $nome) {
    return pg_query(getDBConnection(), "INSERT INTO restaurante (nome, utilizador_username) 
                                             VALUES ('" . $nome . "', '" . $username . "');");
}

function getRestaurantByUsername($username) {
    return pg_fetch_array(pg_query(getDBConnection(), "SELECT id, utilizador_username FROM restaurante WHERE utilizador_username = '" . $username . "'"));
}

function getLastRestaurants($limit){
    return pg_fetch_allOrArray(pg_query( getDBConnection(),"SELECT id, nome, logo_path, utilizador_username FROM restaurante ORDER BY id DESC LIMIT '" . $limit . "'"));
}

function searchRestaurant($input) {
    return pg_fetch_allOrArray(pg_query(getDBConnection(),
        "SELECT restaurante.id, restaurante.nome, restaurante.utilizador_username, restaurante.logo_path
              FROM restaurante
              WHERE nome ILIKE '%" . $input . "%'"));
}
function getRestaurantById($id){
    return pg_fetch_array(pg_query(getDBConnection(), "SELECT * FROM restaurante WHERE restaurante.id= '" . $id . "'"));
}

function getClientsAndSpendingsByRestaurant($restauranteId) {
    return pg_fetch_allOrArray(pg_query(getDBConnection(), "SELECT cliente, SUM(total) AS soma FROM 
                                                          (SELECT comida.preco * encomenda_comida.quantidade AS total, encomenda.cliente_utilizador_username AS cliente 
                                                          FROM comida, encomenda_comida, encomenda
                                                          WHERE encomenda.id = encomenda_comida.encomenda_id
                                                          AND encomenda_comida.comida_id = comida.id
                                                          AND comida.restaurante_id = '" . $restauranteId . "') AS dados
                                                          GROUP BY cliente
                                                          ORDER BY soma DESC"));
}


