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

function searchFood($input) {
    return pg_fetch_all(pg_query(getDBConnection(), "SELECT id, titulo,preco,restaurante_id FROM comida WHERE titulo  ILIKE '%" . $input . "%' order by titulo asc, preco  asc;"));
}

function purchasedDishes($user){
    return pg_fetch_all(pg_query(getDBConnection(),"
            select c.titulo,e.data_encomenda 
            from encomenda_comida ec,encomenda e, comida c
            where e.cliente_utilizador_username ='" . $user . "'
                and ec.encomenda_id=e.id
                and ec.comida_id = c.id"));



}

