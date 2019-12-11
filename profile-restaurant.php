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

    <?php include 'actions/get-restaurant-info.php' ?>

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
            if(!empty($pratos)) {
                foreach ($pratos as $value) {
                    echo '<div>
                        <img src="" alt="">
                        <h3>' . $value['titulo'] . '</h3>
                        <p>' . $value['descricao'] . '</p>
                        <p>' . $value['preco'] . '</p>
                        <button type="button" class="button btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Detalhes
                        </button>
                      </div>';
                }
            }
            ?>
        </div>
        <?php echo $_SESSION['username'];
                echo $user['username'];
        if($_SESSION['username'] = $user['username']) {
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

                        foreach ($pratos as $prato) {
                            echo '<h4 class="modal-title">' . $prato['titulo'] . '</h4>
               
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                    
                    <div class="modal-body">
                        <p>' . $prato['descricao'] . '</p>';
                        }
                        ?>
                    </div>

                    <div class="modal-footer">
                        <button type="button" style="background-color: grey" class="button btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="button btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="javascript/geral.js"></script>
</body>
</html>