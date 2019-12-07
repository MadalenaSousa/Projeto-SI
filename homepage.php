<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LDMEats | Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/icon-logo.png">
</head>
<body>

<header>
    <?php include 'header.php' ?>

</header>

<?php include 'actions/homepage-data.php' ?>

<main class="grid">
<?php
foreach($ultimosrestaurantes as $restaurante)
{
    echo '
         <div class="rest">
            <img src="" alt="">
            <h3>'.$restaurante['nome'].'</h3>
        </div>
    ';
}
?>
</main>

<script src="javascript/geral.js"></script>
</body>
</html>
