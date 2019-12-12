<?php

include dirname(__FILE__) . '/../database-data-functions/utilizador-data.php';

if(isset($_SESSION['username'])) {

    header('Location: ../login.php');

} else {

    $nome = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['confirmpassword'];
    $email = $_POST['email'];

    if(userExists($username, $email)) {
        header('Location: ../signup.php');

    } else {

        createUser($nome, $username, $password, $email, 1) or die;
        createRestaurant($username, $nome) or die;

        session_start();

        $_SESSION['nome'] = $nome;
        $_SESSION['username'] = $username;
        $_SESSION['tipo'] = 1;

        mailOutputForm($email);

        header('Location: ../profile-restaurant.php?username=' . $username);
    }
}

?>