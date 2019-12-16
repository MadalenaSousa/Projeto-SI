<?php

if (!isset($_SESSION['username']) || !isset($_SESSION['nome']) || !isset($_SESSION['tipo'])) {
    header('Location: login.php');

    die;
}