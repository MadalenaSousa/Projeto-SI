<?php

if (isset($_SESSION['username'])) {
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

    <?php include 'actions/search-filter.php'; ?>

    <main>
        <div class="grid-welcome">
            <form method="get" action="search-results.php">
                <input name="search"  type="hidden" value="<?php echo $_GET['search'] ?>">
                <label>Data:
                    <select name="column">
                        <option value="preco">Price</option>
                        <option value="titulo">Plate Name (A-Z)</option>
                        <option value="restaurante_id">Restaurant Name (A-Z)</option>
                    </select>
                </label>
                <label>Order:
                    <select name="order">
                        <option value="ASC">Ascendent</option>
                        <option value="DESC">Descendet</option>
                    </select>
                </label>
                <input type="submit" class="button">
            </form>
        </div>

        <div class="grid-welcome">
        <h3>Food:</h3>
        <div class="grid">

        <?php

        if (isset($food) && !empty($food)) {
            foreach ($food as $comida) {
                echo '
                    <div style="">
                      <img src="" alt="">
                      <a href="plate-detail.php?id=' . $comida['id'] . '">                      
                        <span>' . $comida['titulo'] . '</span>
                        <span>' . $comida['preco'] . '€</span>                      
                      </a>                    
                    </div>';
            }
        }

        ?>

        </div>
        </div>

        <div class="grid-welcome">

        <?php

        if (isset($restaurantes) && !empty($restaurantes)) {
            foreach ($restaurantes as $rest) {
                $foodByRestaurant = searchFoodByRestaurant($rest['id'], $coluna, $ordem);

                echo '<h3>Food from: ' . $rest['nome'] . '</h3>';

                foreach ($foodByRestaurant as $comida) {
                    echo '<div class="grid" style="">
                      <div>  
                          <img src="" alt="">
                          <a href="plate-detail.php?id=' . $comida['id'] . '">                      
                            <span>' . $comida['titulo'] . '</span>
                            <span>' . $comida['preco'] . '€</span>                      
                          </a>
                      </div>                    
                    </div>';
                }
            }
        }

        ?>

        </div>
    </main>
</div>
<script src="javascript/geral.js"></script>
</body>
</html>