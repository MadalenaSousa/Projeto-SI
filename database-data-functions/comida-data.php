<?php

include_once(dirname(__FILE__) . '/connection.php');

function createComida($name, $description, $price, $restaurantId) {
    return pg_query(getDBConnection(), "INSERT INTO comida (titulo, descricao, preco, restaurante_id) 
                                             VALUES ('" . $name . "', '" . $description . "', '" . $price . "', '" . $restaurantId . "');");
}

function updateComida($id, $titulo, $description, $price) {
    return pg_query(getDBConnection(), "UPDATE comida 
                                             SET titulo = '".$titulo." ', descricao = '".$description." ', preco = ".$price." 
                                             WHERE  id = ".$id." ");
}

function getFoodFromRestaurant($restaurantUsername) {
    return pg_fetch_all(pg_query(getDBConnection(),
        "SELECT comida.id, comida.titulo, comida.descricao, comida.preco, comida.restaurante_id
              FROM comida, restaurante
              WHERE restaurante.utilizador_username = '" . $restaurantUsername . "'
              AND restaurante.id = comida.restaurante_id"));
}

function getFoodById($id) {
    return pg_fetch_array(pg_query(getDBConnection(), "SELECT * FROM comida WHERE comida.id = '" . $id . "'"));
}

function deleteComida($comidaId) {
    return pg_query(getDBConnection(), "DELETE FROM comida WHERE comida.id = '" . $comidaId . "'");
}

function searchFood($foodName, $column, $order) {

    $query = "SELECT comida.id, comida.titulo, comida.descricao, comida.preco 
              FROM comida
              WHERE titulo
              ILIKE '%" . $foodName . "%'";

    if($column != null && $order != null) {
        $query = $query . " ORDER BY " . $column .  " " . $order;
    }

    return pg_fetch_all(pg_query(getDBConnection(), $query));
}

function searchFoodByRestaurant($restaurantId, $column, $order) {

    $query = "SELECT comida.id, comida.titulo, comida.descricao, comida.preco
              FROM comida
              WHERE comida.restaurante_id = '" . $restaurantId . "'";

    if($column != null && $order != null) {
        $query = $query . " ORDER BY " . $column .  " " . $order;
    }

    return pg_fetch_all(pg_query(getDBConnection(), $query));
}

function purchasedDishes($user){
    return pg_fetch_all(pg_query(getDBConnection(),"SELECT c.titulo, e.data_encomenda, e.id
                                                         FROM encomenda_comida ec, encomenda e, comida c
                                                         WHERE e.cliente_utilizador_username ='" . $user . "'
                                                         AND ec.encomenda_id = e.id
                                                         AND ec.comida_id = c.id"));
}

function getAllFood() {
    return pg_fetch_all(pg_query(getDBConnection(),
        "SELECT comida.id, comida.titulo, comida.preco, comida.restaurante_id, comida.foto_path
              FROM comida"));
}
