<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LDMEats | Homepage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/style.css">

    <link rel="shortcut icon" href="images/icon-logo.png">
</head>
<body>
<div class="fundo" style="background-image: url('images/fundo.jpg');">

    <header>
        <?php include 'header.php' ?>
    </header>

    <?php

    include 'database-data-functions/restaurante-data.php';
    include 'database-data-functions/comida-data.php'

    ?>

    <h2>New Restaurants:</h2>
    <div class="grid">

        <?php

        $ultimosrestaurantes = getLastRestaurants(4);

        foreach ($ultimosrestaurantes as $restaurante) {
            echo '
           <div class="grid">
                <div class="rest" style="">
                      <img src="' . $restaurante['logo_path'] . '" alt="">
                      
                      <a href="profile-restaurant.php?username=' . $restaurante['utilizador_username'] . '">
                        <h4>' . $restaurante['nome'] . '</h4>
                      </a>     
                </div>
           </div>';
        } ?>
    </div>

    <h2>All our Plates</h2>
    <div class="grid">
        <?php

        $pratos = getAllFood();

        foreach ($pratos as $comida) {
            echo '

            <div class="rest" style="">
              <img src="' . $comida['foto_path'] . '" alt="">
              
              <a href="plate-detail.php?id=' . $comida['id'] . '">
                <h4>' . $comida['titulo'] . '</h4>                  
              </a>
              
              <span>' . getRestaurantById($comida['restaurante_id'])['nome'] . '</span>
            
            </div>';
        }
        ?>
    </div>

    <script src="javascript/geral.js"></script>
</body>
</html>
