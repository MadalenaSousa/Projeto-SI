<?php

include dirname(__FILE__) . '/../database-data-functions/restaurante-data.php';
include dirname(__FILE__) . '/../database-data-functions/comida-data.php';

if (isset($_GET['search']) ) {

    $search = $_GET['search'];
    $coluna = null;
    $ordem = null;

    if(isset($_GET['column']) && isset($_GET['order'])) {
        $coluna = $_GET['column'];
        $ordem = $_GET['order'];
    }

    $restaurantes = searchRestaurant($search);
    $food = searchFood($search, $coluna, $ordem);
}
