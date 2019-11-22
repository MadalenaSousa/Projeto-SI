<?php
$str = "dbname=postgres user=postgres password=postgres host=localhost port=5432";
$connection = pg_connect($str);

if (!$connection) {
    die("Erro na ligacao");
}
echo "Ligacao estabelecida!";

$username = $_POST['username'];
$password = $_POST['confirmpassword'];
$email = $_POST['email'];

pg_close($connection);

header('Location: ../homepage.php');
?>