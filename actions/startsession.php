<?php
if (empty($_POST)) {
    return;
}

include("open_connection.php");


$username =$_POST['username'];
$password=$_POST['password'];
//$role=$_POST['role'];
// deves trazer tudo que precisas para a sessao mas nunca a password

$login = pg_query($connection, "SELECT username,role FROM utilizador WHERE username=$1 AND password=$2",$username, $password);

echo "<br/>";

if (pg_num_rows($login) == 1) {

    session_start();

    $_SESSIONS['username'] = $username;
    $_SESSIONS['role'] = $login['role'];
    // definir resto da info que possas precisar

    echo "Sucesso!";

} else {

    echo "Não há nenhum utilizador registado com esses dados!";

}

include("close_connection.php");

header('Location: ../homepage.php');

?>