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

$login = pg_query($connection, "SELECT username,password FROM utilizador WHERE username='$username' AND password='$password'");

echo "<br/>";

if (pg_num_rows($login) == 1) {

    session_start();

    $_SESSIONS['username'] = $username;
    $_SESSIONS['password'] = $password;

    echo "Sucesso!";

} else {

    echo "Não há nenhum utilizador registado com esses dados!";

}

header('Location: ../profile.php');

?>