<?php

session_start();

if(isset($_SESSION['pratos'])){
    $i = 0;

    //Se já lá estiver aumenta a quantidade
    for($i=0; $i<count($_SESSION['pratos']); $i++){
        if($_SESSION['pratos'][$i]["id"] == $_POST['id']){
            $_SESSION['pratos'][$i]["quantity"]++;
            break;
        }
    }

    //Se correu todos os artigos e não está lá nenhum igual, adiciona
    if($i == count($_SESSION['pratos'])){
        $array = array(
            "id" => $_POST['id'],
            "quantity" => 1
        );
        array_push($_SESSION['pratos'], $array);
    }
} else {
    $_SESSION['pratos'] = array();
    $array = array(
        "id" => $_POST['id'],
        "quantity" => 1
    );
    array_push($_SESSION['pratos'], $array);

    print_r($_SESSION['pratos']);
}

if($_POST['compra-imediata'] == 0){
    header('Location: ../cart.php');
}

?>