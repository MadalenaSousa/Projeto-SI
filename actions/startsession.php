<?php
if (empty($_POST)) {
    return;
}

include("connection.php");

$username = $_POST['username'];
$password = $_POST['password'];

$login = pg_query($connection, "SELECT username, nome, utilizador.tipo_id FROM utilizador WHERE username = '$username' AND password = '$password'");
echo "<br/>";

$dados_utilizador = pg_fetch_array($login);

if (pg_num_rows($login) == 1) {

    session_start();

    $_SESSION['username'] = $dados_utilizador['username'];
    $_SESSION['nome'] = $dados_utilizador['nome'];
    $_SESSION['tipo'] = $dados_utilizador['tipo_id'];

    if($dados_utilizador['tipo_id'] == 1) {
        $dados_restaurante = pg_fetch_array(pg_query("SELECT id, utilizador_username FROM restaurante WHERE utilizador_username = '$username'"));
        $_SESSION['restauranteId'] = $dados_restaurante['id'];
    }

    header('Location: ../homepage.php');

} else {
    echo "Não há nenhum utilizador registado com esses dados!";
}

?>