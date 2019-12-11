<?php

function getDBConnection() {
    $str = "dbname=postgres user=postgres password=postgres host=localhost port=5432";
    $connection = pg_connect($str);

    if (!$connection) {
        die("Erro na ligacao");
    }

    return $connection;
}