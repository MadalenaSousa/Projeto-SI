<?php

include_once(dirname(__FILE__) . '/connection.php');

function createClient($username, $saldo) {
    return pg_query(getDBConnection(), "INSERT INTO cliente (saldo, utilizador_username) 
                                    VALUES ('$saldo', '$username');");
}