<?php

include dirname(__FILE__) . '/../database-data-functions/comida-data.php';

$comidaId = $_POST['id'];

deleteComida($comidaId);

header('Location: ../profile-restaurant.php?username=' . $_GET['username']);