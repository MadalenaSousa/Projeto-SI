<?php

include 'connection.php';

pg_query($connection, "SELECT");

$restaurantId = $_SESSION['restaurantId'];

$pratos = pg_fetch_all(pg_query($connection, "SELECT id, titulo, descricao, preco, restaurante_id FROM comida WHERE comida.restaurante_id = '$restaurantId'"));
