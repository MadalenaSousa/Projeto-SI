<?php
include("connection.php");

$ultimosrestaurantes = pg_fetch_all(pg_query($connection, "select id, nome, logo_path from restaurante order by id desc limit 4"));

$pratos=pg_fetch_all(pg_query($connection,"select descricao from comida;"));

?>