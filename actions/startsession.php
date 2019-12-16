<?php
if (empty($_POST)) {
    return;
}

include dirname(__FILE__) . '/../database-data-functions/utilizador-data.php';
include dirname(__FILE__) . '/../database-data-functions/restaurante-data.php';

$username = $_POST['username'];
$password = $_POST['password'];

if (correctData($username, $password)) {

    session_start();

    $dados_utilizador = getUserByUsername($username);

    $_SESSION['username'] = $dados_utilizador['username'];
    $_SESSION['nome'] = $dados_utilizador['nome'];
    $_SESSION['tipo'] = $dados_utilizador['tipo_id'];

    if($dados_utilizador['tipo_id'] == 1) {
        $dados_restaurante = getRestaurantByUsername($dados_utilizador['username']);

        $_SESSION['restauranteId'] = $dados_restaurante['id'];
    }

    header('Location: ../homepage.php');

} else {
    header('Location: ../login.php?error=true');
}

?>