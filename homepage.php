<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LDMEats | Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/style.css">

    <link rel="shortcut icon" href="images/icon-logo.png">
</head>
<body>
<div class="fundo" style="background-image: url('images/fundo.jpg');">

    <header>
        <?php include 'header.php' ?>
    </header>

    <?php include 'actions/homepage-data.php' ?>

    <main class="grid">
        <?php
        foreach ($ultimosrestaurantes as $restaurante) {
            echo '
            <div class="rest" style="">
              <img src="" alt="">
              
              <a href="profile-restaurant.php?username='. $restaurante['utilizador_username'] .'">
                <h3>'.$restaurante['nome'].'</h3>
              </a>
              
              <p>'.$restaurante['id'].'</p>     
            </div>';
        }
        ?>
    </main>

    <script src="javascript/geral.js"></script>
</body>
</html>
