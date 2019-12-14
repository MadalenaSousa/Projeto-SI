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

    <?php include 'database-data-functions/restaurante-data.php' ?>
    <h1>Ultimos restaurante a serem adicionados:</h1>
    <div class="grid">

        <?php
        $ultimosrestaurantes = getLastRestaurants(4);

        foreach ($ultimosrestaurantes as $restaurante) {
            echo '
           <div class="grid">
            <div class="rest" style="">
              <img src="' . $restaurante['logo_path'] . '" alt="">
              
              <a href="profile-restaurant.php?username=' . $restaurante['utilizador_username'] . '">
                <h3>' . $restaurante['nome'] . '</h3>
              </a>
              
              <p>' . $restaurante['id'] . '</p>     
            </div>
            
              </div>
            ';
        } ?>
    </div>
        <h1>Todos os restaurantes:</h1>
    <div class="grid">
        <?php

        $restaurantes = getAllRestaurants();

        foreach ($restaurantes as $restaurante) {
            echo '

            <div class="rest" style="">
              <img src="' . $restaurante['logo_path'] . '" alt="">
              
              <a href="profile-restaurant.php?username=' . $restaurante['utilizador_username'] . '">
                <h3>' . $restaurante['nome'] . '</h3>
                  
              </a>
              
            
            </div>';

        }
        ?>
    </div>

    <script src="javascript/geral.js"></script>
</body>
</html>
