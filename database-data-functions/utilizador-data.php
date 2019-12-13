<?php

include_once dirname(__FILE__) . '/connection.php';

function createUser($nome, $username, $password, $email, $tipoId) {
    return pg_query(getDBConnection(), "INSERT INTO utilizador (nome, username, password, email, tipo_id) 
                                             VALUES ('" . $nome . "', '" . $username . "', '" . $password . "', '" . $email . "','" . $tipoId . "');");
}

function getUserByUsername($username) {
    return pg_fetch_array(pg_query(getDBConnection(), "SELECT * FROM utilizador WHERE username = '" . $username . "'"));
}

function userExists($username, $email){
    $dadosexistentes = pg_query(getDBConnection(), "SELECT username, email FROM utilizador");
    $dadosexistentes = pg_fetch_all($dadosexistentes);

    $existe = false;

    if(empty($dadosexistentes)) {
        $existe = false;
    } else {
        foreach ($dadosexistentes as $value) {
            if ($value['username'] == $username || $value['email'] == $email) {
                $existe = true;
            } else {
                $existe = false;
            }
        }
    }

    return $existe;
}

function correctData($username, $password) {
    $account = pg_query(getDBConnection(), "SELECT username, nome, utilizador.tipo_id 
                                                  FROM utilizador 
                                                  WHERE username = '" . $username . "' 
                                                  AND password = '" . $password . "'");

    if (pg_num_rows($account) == 1) {
        return true;
    } else {
        return false;
    }
}

function mailOutputForm($mail){
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
};