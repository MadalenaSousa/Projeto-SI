<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LDMEats | Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/icon-logo.png">

</head>
<body>
<div class="fundo" style="background-image: url('images/fundo.jpg');">

    <header>
        <?php include 'header.php' ?>

    </header>

    <main class="grid">
        <div class="rest" style="padding: 10px 40px 10px 40px;">

            <?php
            include 'actions/pesquisa-filtrar.php';

            if(isset($restaurantes) && !empty($restaurantes)){
                foreach ($restaurantes as $restaurante) {
                    echo '
                    <div class="rest" style="">
                      <img src="" alt="">
                      
                      <a href="profile-restaurant.php?id='. $restaurante['id'] .'">
                        <h3>'.$restaurante['nome'].'</h3>
                      </a>
                      
                      <p>'.$restaurante['id'].'</p>     
                    </div>';
                }
            }
            if(isset($comidas) && !empty($comidas)) {
                foreach ($comidas as $comida) {
                    echo '
                    <div class="rest" style="">
                      <img src="" alt="">
                      
                      <a href="profile-plate.php?id=' . $comida['id'] . '"> <!-- Profile plate?? Supostamente é para usar o modal -->
                        <h3>' . $comida['titulo'] . '</h3>
                      </a>
                      
                      <p>' . $comida['id'] . '</p>     
                    </div>';
                }
            }
            ?>
        </div>
    </main>
</div>

<script src="javascript/geral.js"></script>
</body>
</html>