<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LDMEats | Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/icon-logo.png">
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
                    <h1>Welcome Back!</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <form method="post" action="php/startsession.php">
                        <label><input placeholder="Username" type="text" name="username" required></label><br>
                        <label><input placeholder="Password" type="text" name="password" required></label><br>
                        <input type="submit" class="button" value="Login">
                    </form>
                </div>
            </div>
        </div>
        <div class="col-3 empty"></div>
    </div>
</div>
</body>
</html>




