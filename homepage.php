<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LDMEats | Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/icon-logo.png">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="fundo" style="background-image: url('images/fundo.jpg');">

    <header>
        <?php include 'header.php' ?>

    </header>

    <?php include 'actions/homepage-data.php' ?>

    <main class="grid">
        <?php
        foreach ($ultimosrestaurantes as $restaurante) {
            echo '

         <div class="rest" style="padding: 10px 40px 10px 40px;">
            <img src="" alt="">
            <h3>' . $restaurante['nome'] . '</h3>
            <p>' . $restaurante['id'] . '</p>
        
     
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"style="background-color:#77CAB6;border:0px;  border-radius: 40px; margin-left:70%" >Detalhes</button>
    
       <div class="modal fade" id="myModal" role="dialog">
  
 \\fazer um foreach para ir buscar os pratos na model 
       foreach ($pratos as $prato) {
     
      <div class="modal-content" style="width: 500px">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>/*. $prato[descricao] . */</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
        
    ';

        }
        ?>

    </main>

    <script src="javascript/geral.js"></script>
</body>
</html>
