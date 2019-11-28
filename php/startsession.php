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
print pg_affected_rows($login);

echo "<br />";

if ($login && pg_num_rows($login) == 1) {

    $_SESSIONS['username'] = pg_result_status($login);

    echo "sucesso";

} else {

    echo "bolas o que correu mal";

}

//header('Location: ../profile.php');

?>