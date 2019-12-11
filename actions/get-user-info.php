<?php

include 'connection.php';

$username = $_GET['username'];

$user = pg_fetch_array(pg_query("SELECT * FROM utilizador WHERE username = '$username'"));