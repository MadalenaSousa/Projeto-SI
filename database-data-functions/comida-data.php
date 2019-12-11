<?php

include_once(dirname(__FILE__) . '/connection.php');

function createComida($name, $description, $price, $restaurantId) {
    return pg_query(getDBConnection(), "INSERT INTO comida (titulo, descricao, preco, restaurante_id) 
                                             VALUES ('$name', '$description', '$price', '$restaurantId');");
}

function getFoodFromRestaurant($restaurantUsername) {
    return pg_fetch_all(pg_query(getDBConnection(),
        "SELECT comida.id, comida.titulo, comida.descricao, comida.preco, comida.restaurante_id
          FROM comida, restaurante
          WHERE restaurante.utilizador_username = '$restaurantUsername'
          AND restaurante.id = comida.restaurante_id"));
}

function deleteComida($comidaId) {
    return pg_query(getDBConnection(), "DELETE FROM comida WHERE comida.id = '$comidaId'");
}