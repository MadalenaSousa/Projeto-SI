<?php
include('connection.php');

$dadosexistentes = pg_query($connection, "SELECT username FROM utilizador");
$dadosexistentes = pg_fetch_all($dadosexistentes);