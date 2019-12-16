<?php

if(isset($_SESSION['username'])) {

    include dirname(__FILE__) . '/../database-data-functions/close-connection.php';

    unset($_SESSION);
    session_destroy();
}

header('Location: ../index.php');
