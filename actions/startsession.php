<?php
if (empty($_POST)) {
    return;
}

include("connection.php");

$username = $_POST['username'];
$password = $_POST['password'];

$login = pg_query($connection, "SELECT username, nome FROM utilizador WHERE username = '$username' AND password = '$password'");
echo "<br/>";

$dados_utilizador = pg_fetch_array($login);

if (pg_num_rows($login) == 1) {

    session_start();

    $_SESSION['username'] = $username;
    $_SESSION['nome'] = $dados_utilizador['nome'];

    header('Location: ../homepage.php');

} else {
    echo "Não há nenhum utilizador registado com esses dados!";
}

?>