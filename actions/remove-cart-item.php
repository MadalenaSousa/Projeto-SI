<?php

session_start();

for($i=0; $i<count($_SESSION['pratos']); $i++) {
    if ($_SESSION['pratos'][$i]['id'] == $_POST['id']){
        array_splice($_SESSION['pratos'], $i, 1);
        break;
    }
}

if(count($_SESSION['pratos']) == 0) {
    unset($_SESSION['pratos']);
}

header('Location: ../cart.php');