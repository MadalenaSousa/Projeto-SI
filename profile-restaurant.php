<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LDMEats | Restaurant</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
                <a href="discounts-restaurant.php?username=<?php echo $_GET['username'] ?>">Discounts</a>
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
                               
                              <a href="edit-plate.php?id=' . $value['id'] . '">
                                <div class="button">Edit</div>
                              </a>';
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
    </main>

    <script src="javascript/geral.js"></script>
</body>
</html>