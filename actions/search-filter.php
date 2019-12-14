<?php

include dirname(__FILE__) . '/../database-data-functions/restaurante-data.php';
include dirname(__FILE__) . '/../database-data-functions/comida-data.php';

if (isset($_GET['search']) ) {

    $search = $_GET['search'];

    $restaurantes = searchRestaurant($search);
    $comidas = searchFood($search);

}
