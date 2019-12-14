<?php

include dirname(__FILE__) . '/../database-data-functions/utilizador-data.php';
include dirname(__FILE__) . '/../database-data-functions/cliente-data.php';

if(isset($_SESSION['username'])) {

    header('Location: ../login.php');

} else {

    $nome = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['confirmpassword'];
    $email = $_POST['email'];
    $saldo = $_POST['saldo'];

    if(userExists($username, $email) == True) {
        header('Location: ../signup.php');
    } else {
        createUser($nome, $username, $password, $email, 2) or die;
        createClient($username, $saldo) or die;

        session_start();

        $_SESSION['nome'] = $nome;
        $_SESSION['username'] = $username;
        $_SESSION['tipo'] = 2;

        mailOutputForm($email);

        header('Location: ../profile-client.php?username=' . $username);
    }

}

?>