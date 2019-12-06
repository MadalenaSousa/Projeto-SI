<?php
$nome = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['confirmpassword'];
$email = $_POST['email'];

$existe = False;

$dadosexistentes = pg_query($connection, "SELECT username, email FROM utilizador");
$dadosexistentes = pg_fetch_all($dadosexistentes);

if(empty($dadosexistentes)) {
    $existe = False;
} else {
    foreach ($dadosexistentes as $value) {
        if ($value['username'] == $username || $value['email'] == $email) {
            $existe = True;
        } else {
            $existe = False;
        }
    }
}