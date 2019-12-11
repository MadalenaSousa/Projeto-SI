<?php

if(isset($_SESSION['username'])) {
    unset($_SESSION);
    session_destroy();
}

header('Location: ../index.php');
