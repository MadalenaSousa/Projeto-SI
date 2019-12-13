<?php

if(isset($_SESSION['username'])) {
    session_start();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LDMEats | Search Result</title>
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

            <?php

            include 'actions/search.php';

            if(isset($restaurantes) && !empty($restaurantes)){
                foreach ($restaurantes as $restaurante) {
                    echo '
                    <div class="rest" style="width: 20%;">
                      <img src="" alt="">
                      
                      <a href="profile-restaurant.php?username='. $restaurante['utilizador_username'] .'">
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
                      
                      <a href="plate-detail.php?id=' . $comida['id'] . '">
                        <h3>' . $comida['titulo'] . '</h3>
                      </a>
                      
                      <p>' . $comida['id'] . '</p>     
                    </div>';
                }
            }
            ?>
    </main>
</div>

<script src="javascript/geral.js"></script>
</body>
</html>