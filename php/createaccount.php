<?php
$str = "dbname=postgres user=postgres password=postgres host=localhost port=5432";
$connection = pg_connect($str);

if (!$connection) {
    die("Erro na ligacao");
}
echo "Ligacao estabelecida!";

$nome = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['confirmpassword'];
$email = $_POST['email'];

$dadosexistentes = pg_query($connection, "SELECT username FROM utilizador"); // ????

$resultados = pg_query($connection,
    "INSERT INTO utilizador (nome, username, password, email) VALUES ('$nome', '$username', '$password', '$email');"/*---*/)
    or die;

include('sendconfirmationmail.php');

pg_close($connection);

header('Location: ../profile.php');
?>