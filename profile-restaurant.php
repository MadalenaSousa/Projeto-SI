<?php session_start(); ?>

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
    <header>
        <?php include('header.php'); ?>
    </header>

    <?php
        include 'database-data-functions/comida-data.php';
        include 'database-data-functions/utilizador-data.php';
        include 'database-data-functions/restaurante-data.php';

        $user = getUserByUsername($_GET['username']);
    ?>

    <main class="grid-welcome">
        <div>
            <div>
                <img src="<?php
                if($user['foto_perfil_path'] != null) {
                    echo $user['foto_perfil_path'];
                } else {
                    echo "images/default-profile-pic";
                } ?>" alt="">
            </div>
            <div>
                <h1><?php echo $user['nome'] ?></h1>
            </div>
            <div>
                <a href="#">About</a>
                <a href="#">Discounts</a>
                <a href="#">Messages</a>
                <a href="#">Edit Profile</a>
            </div>
        </div>
        <div>
            Menu
        </div>
        <div class="grid">
            <?php
            if(!empty(getFoodFromRestaurant($_GET['username']))) {
                foreach(getFoodFromRestaurant($_GET['username']) as $value)
                {
                    echo '<div>
                        <img src="" alt="">
                        <h3>' . $value['titulo'] . '</h3>
                        <p>' . $value['descricao'] . '</p>
                        <p>' . $value['preco'] . '</p>';

                    if (isset($_SESSION['username']) && $_SESSION['tipo'] == 1) {
                        echo '<form method="post" action="actions/delete-comida.php?username=' . $_GET['username'] . '">
                                <input type="hidden" name="id" value="' . $value['id'] . '">
                                <input type="submit" class="button" value="Delete">
                              </form>
                               
                              <form method="post">
                                <input type="submit" class="button" value="Edit">
                              </form>';
                    }

                        echo '<a href="plate-detail.php?id=' . $value['id'] . '">
                                <div class="button">Detalhes</div>
                              </a>
                            </div>';
                }
            }
            ?>
        </div>
        <?php
        if($_SESSION['username'] == $user['username']) {
            echo '<div>
                <a class="button" href="new-plate.php">ADD NEW PLATE</a>
              </div>';
        }
        ?>

        <!-- DETALHES DO PRATO -->

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <?php

                        if(isset($_POST['detalhe'])) {
                            $comida = getFoodById($_POST['id']);

                            echo '<h4 class="modal-title">' . $comida['titulo'] . '</h4>
               
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                    
                    <div class="modal-body">
                        <p>' . $comida['descricao'] . '</p>';
                        }
                        ?>
                    </div>

                    <div class="modal-footer">
                        <button type="button" style="background-color: grey" class="button btn btn-secondary" data-dismiss="modal">Close</button>

                        <form method="post" action="actions/add-cart.php">
                            <input type="hidden" name="id" value="">
                            <input type="hidden" name="compra-imediata" value="1">
                            <input type="button" class="button btn btn-primary" value="Add To Cart">
                        </form>

                        <form method="post" action="actions/add-cart.php">
                            <input type="hidden" name="id" value="">
                            <input type="hidden" name="compra-imediata" value="1">
                            <input type="submit" class="button btn btn-primary" value="Instant Buy">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="javascript/geral.js"></script>
</body>
</html>