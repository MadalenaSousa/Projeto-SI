<?php
if (empty($_POST)) {
    return;
}

include("connection.php");


$username = $_POST['username'];
$password = $_POST['password'];

$login = pg_query($connection, "SELECT username, FROM utilizador WHERE username =" . $username . "AND password =" . $password);
echo "<br/>";

if (pg_num_rows($login) == 1) {

    session_start();

    $_SESSIONS['username'] = $username;

    echo "Sucesso!";

} else {

    echo "Não há nenhum utilizador registado com esses dados!";

}

header('Location: ../homepage.php');

?>