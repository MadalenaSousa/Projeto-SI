<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LDMEats | Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/icon-logo.png">
</head>
<body>
<div class="fundo" style="background-image: url('images/fundo.jpg');">
    <header>
        <?php include 'header.php' ; ?>
    </header>

    <div class="grid">
        <div></div>
        <div class="grid-welcome">
            <div class="col-12">
                <h1>Welcome Back!</h1>
            </div>
            <div class="col-12">
                <form method="post" action="actions/startsession.php">
                    <label><input placeholder="Username" type="text" name="username" required></label><br>
                    <label><input placeholder="Password" type="text" name="password" required></label><br>
                    <input type="submit" class="button" value="Login">
                </form>
            </div>
        </div>
        <div></div>
    </div>
</div>

<script src="javascript/geral.js"></script>
</body>
</html>




