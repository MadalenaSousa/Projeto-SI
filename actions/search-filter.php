<?php
include("connection.php");

if (isset($_GET['search'])) {

    $search = $_GET['search'];

   $restaurantes = pg_fetch_all(pg_query("select id, nome, utilizador_username from restaurante where nome ilike '%$search%'"));
   // $restaurantes= search(restaurante,$search);
    $comidas = pg_fetch_all(pg_query("select id, titulo, preco, classificacao_id from comida where titulo ilike '%$search%' order by titulo asc, preco asc,classificacao_id asc;"));

    /* print_r($restaurantes);
     print_r($comidas);*/

}
?>