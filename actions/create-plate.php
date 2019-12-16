<?php

include dirname(__FILE__) . '/../database-data-functions/comida-data.php';
include dirname(__FILE__) . '/../database-data-functions/restaurante-data.php';

session_start();

$name = $_POST['name'];
$description = $_POST['descricao'];
$price = $_POST['preco'];
$restaurantId = getRestaurantByUsername($_SESSION['username'])['id'];

createComida($name, $description, $price, $restaurantId) or die;

header('Location: ../profile-restaurant.php?username=' . $_SESSION['username']);