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
    return pg_fetch_all(pg_query( getDBConnection(),"SELECT id, nome, logo_path, utilizador_username FROM restaurante ORDER BY id DESC LIMIT '" . $limit . "'"));
}

function searchRestaurant($input) {
    return pg_fetch_all(pg_query(getDBConnection(), "SELECT id, nome, utilizador_username,logo_path FROM restaurante WHERE nome ILIKE '%" . $input . "%'"));
}
function getRestouranteById($id){
    return pg_fetch_array(pg_query(getDBConnection(), "SELECT * FROM restaurante WHERE restaurante.nome= '" . $id . "'"));

}

