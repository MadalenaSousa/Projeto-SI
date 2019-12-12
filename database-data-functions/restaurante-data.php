<?php

include_once(dirname(__FILE__) . '/connection.php');

function createRestaurant($username, $nome) {
    return pg_query(getDBConnection(), "INSERT INTO restaurante (nome, utilizador_username) 
                                             VALUES ('$nome', '$username');");
}

function getRestaurantByUsername($username) {
    return pg_fetch_array(pg_query("SELECT id, utilizador_username FROM restaurante WHERE utilizador_username = '$username'"));
}