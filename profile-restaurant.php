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

    <main class="grid-welcome">
        <div>
            <div>
                <img src="<?php if(isset($_SESSION['foto'])) {
                                    echo $_SESSION['foto'];
                                }
                            ?>" alt="">
            </div>
            <div>
                <h1><?php echo $_SESSION['nome'] ?></h1>
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
            <div>
                <img src="#" alt="">
                <h3>Nome</h3>
                <div class="button">DETAILS</div>
            </div>
            <div>
                <img src="#" alt="">
                <h3>Nome</h3>
                <div class="button">DETAILS</div>
            </div>
            <div>
                <img src="#" alt="">
                <h3>Nome</h3>
                <div class="button">DETAILS</div>
            </div>
            <div>
                <img src="#" alt="">
                <h3>Nome</h3>
                <div class="button">DETAILS</div>
            </div>
        </div>
    </main>

    <script src="javascript/geral.js"></script>
</body>
</html>