<?php

if ($_SESSION['tipo'] != 2) {
    header('Location: homepage.php');

    die;
}