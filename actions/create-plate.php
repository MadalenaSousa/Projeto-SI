<?php

include('connection.php');

session_start();

$name = $_POST['name'];
$description = $_POST['descricao'];
$price = $_POST['preco'];
$restaurantId = $_SESSION['restauranteId'];

pg_query($connection, "INSERT INTO comida (titulo, descricao, preco, restaurante_id) 
                                    VALUES ('$name', '$description', '$price', '$restaurantId');")
or die;

print_r($_SESSION);

//header('Location: ../profile-restaurant.php?username=' . $_SESSION['username']);