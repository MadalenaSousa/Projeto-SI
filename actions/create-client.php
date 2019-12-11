<?php

include(dirname(__FILE__) . '/../models/utilizador_model.php');

if(isset($_SESSION['username'])) {

    header('Location: ../login.php');

} else {

    include 'verify-user.php';
    include 'mail-registration.php';

    $saldo = $_POST['saldo'];

    if($existe) {
        header('Location: ../signup.php');
    } else {
        createUser($nome, $username, $password, $email, 2) or die;
        createClient($saldo, $username) or die;

        session_start();

        $_SESSION['nome'] = $nome;
        $_SESSION['username'] = $username;

        mailOutputForm($email);

        header('Location: ../profile-client.php?username=' . $username);
    }

}

?>