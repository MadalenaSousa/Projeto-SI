<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LDMEats | Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/icon-logo.png">
</head>
<body>
<div class="fundo" style="background-image: url('images/fundo.jpg');">
    <header>
        <?php include 'header.php'; ?>
    </header>

    <main class="grid">
        <div></div>
        <div class="grid-welcome">
            <div style="color: red"><?php if(isset($_GET['error'])) {
                echo 'Username or email already exists!';
            } ?>
            </div>
            <div>
                <h1>Create an Account as a Client!</h1>
                <form method="post" action="actions/create-client.php">
                    <label><input placeholder="Nome" type="text" name="name" required></label><br>
                    <br>
                    <label><input placeholder="Username" type="text" name="username" required></label><br>
                    <br>
                    <label><input placeholder="Email" type="text" name="email" required></label><br>
                    <br>
                    <label><input placeholder="Password" type="text" name="password" required></label><br>
                    <br>
                    <label><input placeholder="Confirm Password" type="text" name="confirmpassword" required></label><br>
                    <br>
                    <input type="submit" class="button" value="Registar">
                </form>
            </div>
            <div>
                <h1>Create an Account as a Restaurant!</h1>
                <form method="post" action="actions/create-restaurant.php">
                    <label><input placeholder="Nome" type="text" name="name" required></label><br>
                    <br>
                    <label><input placeholder="Username" type="text" name="username" required></label><br>
                    <br>
                    <label><input placeholder="Email" type="text" name="email" required></label><br>
                    <br>
                    <label><input placeholder="Password" type="text" name="password" required></label><br>
                    <br>
                    <label><input placeholder="Confirm Password" type="text" name="confirmpassword" required></label><br>
                    <br>
                    <input type="submit" class="button" value="Registar">
                </form>
            </div>
        </div>
        <div></div>
    </main>
</div>

<script src="javascript/geral.js"></script>
</body>
</html>