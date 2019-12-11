<?php

include_once(dirname(__FILE__) . '/connection.php');

function getUserByUsername($username) {
    return pg_fetch_array(pg_query(getDBConnection(), "SELECT * FROM utilizador WHERE username = '$username'"));
}

function createUser($nome, $username, $password, $email, $tipoId) {
    return pg_query(getDBConnection(), "INSERT INTO utilizador (nome, username, password, email, tipo_id) 
                                    VALUES ('$nome', '$username', '$password', '$email', $tipoId);");
}

function userExists($username){

}