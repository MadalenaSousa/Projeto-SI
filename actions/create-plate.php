<?php

include('connection.php');

$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];

pg_query($connection, "INSERT INTO comida (titulo, descricao, preco) 
                                    VALUES ('$name', '$description', '$price');")
or die;

header('Location: ../profile-restaurant.php');