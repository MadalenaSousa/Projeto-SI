<?php

session_start();

unset($_SESSION['pratos']);

header('Location: ../cart.php');