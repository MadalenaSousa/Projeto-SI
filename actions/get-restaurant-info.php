<?php

include 'connection.php';

$username = $_GET['username'];

$user = pg_fetch_array(pg_query("SELECT * FROM utilizador WHERE username = '$username'"));

$pratos = pg_fetch_all(pg_query($connection,
    "SELECT comida.id, comida.titulo, comida.descricao, comida.preco, comida.restaurante_id, utilizador.username, restaurante.id, restaurante.utilizador_username 
          FROM comida, restaurante, utilizador 
          WHERE utilizador.username = '$username'
          AND utilizador.username = restaurante.utilizador_username 
          AND restaurante.id = comida.restaurante_id"));