<?php session_start(); ?>

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
            foreach($pratos as $value)
            {
                echo '<div>
                        <img src="" alt="">
                        <h3>'.$value['titulo'].'</h3>
                        <p>'.$value['descricao'].'</p>
                        <p>'.$value['preco'].'</p>
                      </div>';
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
    </main>

    <script src="javascript/geral.js"></script>
</body>
</html>