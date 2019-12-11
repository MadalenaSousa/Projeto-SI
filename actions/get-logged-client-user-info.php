<?php

include 'connection.php';

$username = $_SESSION['username'];

$user = pg_fetch_array(pg_query("SELECT * FROM utilizador, cliente WHERE utilizador.username = '$username'"));