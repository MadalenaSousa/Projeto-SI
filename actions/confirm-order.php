<?php

session_start();

unset($_SESSION['pratos']);

header('Location: ../profile-client.php?username=' . $_SESSION['username']);