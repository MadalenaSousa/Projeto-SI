<?php

include_once(dirname(__FILE__) . '/connection.php');

function createClient($username, $saldo) {
    return pg_query(getDBConnection(), "INSERT INTO cliente (saldo, utilizador_username) 
                                            VALUES ('" . $saldo . "', '" . $username . "');");
}

function getClientByUsername($username) {
    return pg_fetch_array(pg_query(getDBConnection(), "SELECT * FROM cliente WHERE utilizador_username = '" . $username . "'"));
}

function updateBudget($username, $newSaldo) {
    return pg_query(getDBConnection(), "UPDATE cliente SET saldo = '" . $newSaldo . "' WHERE cliente.utilizador_username = '" . $username . "'");
}