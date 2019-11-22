<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LDMEats | Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="grid">
<div class="fundo" style="background-image: url('images/fundo.jpg');">
    <header>
        <?php include('header.php'); ?>
    </header>

    <div class="row">
        <div class="col-3 empty"></div>
        <div class="col-6 welcome">
            <div class="row">
                <div class="col-12">
                    <h1>Create an Account!</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <form method="post" action="php/createaccount.php">
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
        </div>
        <div class="col-3 empty"></div>
    </div>
</div>
</body>
</html>