<?php

include dirname(__FILE__) . '/../database-data-functions/comida-data.php';

$comidaId = $_POST['id'];

$wasBought = getFoodById($comidaId);

if($wasBought['comprado'] == false) {
    deleteComida($comidaId);
    header('Location: ../profile-restaurant.php?username=' . $_GET['username']);
} else {
    header('Location: ../profile-restaurant.php?username=' . $_GET['username'] . '&error=true');
}