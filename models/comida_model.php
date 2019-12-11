<?php

include_once(dirname(__FILE__) . '/connection.php');

function getFoodFromRestaurant($restaurantUsername) {
    return pg_fetch_all(pg_query(getDBConnection(),
        "SELECT comida.id, comida.titulo, comida.descricao, comida.preco, comida.restaurante_id
          FROM comida, restaurante
          WHERE restaurante.utilizador_username = '$restaurantUsername'
          AND restaurante.id = comida.restaurante_id"));
}