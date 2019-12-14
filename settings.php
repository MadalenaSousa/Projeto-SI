<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LDMEats | Settings</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/icon-logo.png">
</head>
<body>

<header>
    <?php include 'header.php'; ?>
</header>

<form method="post" action="actions/.php">
    New nome:<br>
    <input type="text" name="" value="new name"><br>
    New username:<br>
    <input type="text" name="" value="new username"><br><br>
    New password:<br>
    <input type="text" name="" value="new password"><br><br>
    New email:<br>
    <input type="email" name="" value="new email"><br><br>
    New foto:<br>
    <input type="file" name="" value="new username"><br><br>

    <input type="submit" value="Submit Changes">
</form>


<script src="javascript/geral.js"></script>
</body>
</html>