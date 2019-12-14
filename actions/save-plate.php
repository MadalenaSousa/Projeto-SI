<?php

include dirname(__FILE__) . '/../database-data-functions/comida-data.php';

session_start();

$titulo = $_POST['titulo'];
$description = $_POST['descricao'];
$price = $_POST['preco'];
$id = $_POST['id'];

updateComida($id, $titulo, $description, $price) or die;

header('Location: ../plate-detail.php?id=' . $id);