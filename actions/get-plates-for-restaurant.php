<?php

include 'connection.php';

$restaurantId = $_SESSION['id'];

$pratos = pg_fetch_all(pg_query($connection, "select id, titulo, descricao, preco from comida where restaurant_id = $restaurantId"));
