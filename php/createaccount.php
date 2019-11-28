<?php
$nome = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['confirmpassword'];
$email = $_POST['email'];

foreach ($dadosexistentes as $value) {
    if($value['username'] == $nome || $value['email'] = $email){

        header('Location: ../signup.php');
        break;

    } else {
        pg_query($connection, "INSERT INTO utilizador (nome, username, password, email) VALUES ('$nome', '$username', '$password', '$email');")
        or die;

        include('sendconfirmationmail.php');

        header('Location: ../profile.php');
    }
}
?>