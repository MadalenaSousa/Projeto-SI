<?php

include('connection.php');

if(isset($_SESSION['username'])) {

    header('Location: ../login.php');

} else {

    include 'verify-user.php';
    include 'mail-registration.php';

    if($existe) {
        header('Location: ../signup.php');

    } else {

        pg_query($connection, "INSERT INTO utilizador (nome, username, password, email, tipo_id) 
                                    VALUES ('$nome', '$username', '$password', '$email', 1);")
        or die;

        pg_query($connection, "INSERT INTO restaurante (nome, utilizador_username) 
                                    VALUES ('$nome', '$username');")
        or die;

        session_start();

        $_SESSION['nome'] = $nome;
        $_SESSION['username'] = $username;

        mailOutputForm($email);

        header('Location: ../profile-restaurant.php');
    }
}

?>