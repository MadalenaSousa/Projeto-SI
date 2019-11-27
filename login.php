<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LDMEats | Sign Up</title>
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
                        <br>
                        <label><input placeholder="Email" type="text" name="email" required></label><br>
                        <br>
                        <label><input placeholder="Password" type="text" name="password" required></label><br>
                        <br>
                        <label><input placeholder="Confirm Password" type="text" name="confirmpassword"
                                      required></label><br>
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

<?php
if (empty($_POST)) {
    return;
}

$str = "dbname=postgres user=postgres password=postgres host=localhost port=5432";
$connection = pg_connect($str);

if (!$connection) {
    die("Erro na ligacao");
}

$username =$_POST['username'];
$password=$_POST['password'];
$email=$_POST['username'];



$login = pg_query($connection, "select username,password,email from utilizador WHERE username='$username' AND password='$password' AND email=$email;");
print pg_affected_rows($login);

echo "<br />";

if ($login && pg_num_rows($login) == 1) {

    $_SESSIONS['username'] = pg_result_status( $login);

    echo "sucesso";

} else {

    echo "bolas o que correu mal";

}

?>


