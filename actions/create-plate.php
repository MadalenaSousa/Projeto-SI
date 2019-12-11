<?php

include('connection.php');

$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$restaurantId = $_SESSION['id'];

pg_query($connection, "INSERT INTO comida (titulo, descricao, preco, restaurante_id) 
                                    VALUES ('$name', '$description', '$price', '$restaurantId');")
or die;

header('Location: ../profile-restaurant.php');