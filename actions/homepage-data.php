<?php
include("connection.php");

$restaurantes = pg_query($connection, "select id,nome, logo_path from restaurante limit 4");

$resultados = pg_fetch_all($restaurantes);

for ($i = 0; $i < count($resultados); $i++) {

    if ($resultados[$i] >= count($resultados) - 4) {

        $ultimosrestaurantes = array($resultados['id']);

    }
}

?>