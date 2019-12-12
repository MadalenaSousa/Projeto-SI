<?php
include("connection.php");

if (isset($_GET['search'])) {

    $search = $_GET['search'];

    $restaurantes = pg_fetch_all(pg_query("select id, nome from restaurante where nome like '%$search%'"));
    $comidas = pg_fetch_all(pg_query("select id, titulo from comida where titulo like '%$search%'"));

   /* print_r($restaurantes);
    print_r($comidas);*/

}
?>