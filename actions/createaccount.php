<?php

include('connection.php');

$nome = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['confirmpassword'];
$email = $_POST['email'];

$dadosexistentes = pg_query($connection, "SELECT username FROM utilizador");
$dadosexistentes = pg_fetch_all($dadosexistentes);

foreach ($dadosexistentes as $value) {
    if($value['username'] == $nome || $value['email'] = $email){

        header('Location: ../signup.php');
        break;

    } else {
        pg_query($connection, "INSERT INTO utilizador (nome, username, password, email) VALUES ('$nome', '$username', '$password', '$email');")
        or die;

        mailOutputForm($email);

        header('Location: ../profile.phhp');
    }
}

function mailOutputForm($mail)
{
    $message = "Saudacoes,
Este mail serve para confirmar o seu email. Por favor, nao responda a este mail. 
   
BEM VINDO AO LDMEats!
Faça Login na plataforma com a sua nova conta através do seguinte link:
https://student.dei.uc.pt/~msousa/Projeto-SI/login.actions
https://student.dei.uc.pt/~avicente/Projeto-SI/login.actions
 
Cumprimentos,
LDMEats
    ";
    mail($mail,
        'Form submitted',
        $message,
        'From: mmdesign@example.com');
}



?>