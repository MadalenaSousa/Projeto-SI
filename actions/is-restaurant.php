<?php

if ($_SESSION['tipo'] != 1) {
    header('Location: homepage.php');

    die;
}