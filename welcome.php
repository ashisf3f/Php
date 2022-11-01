<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
        header('Location : login.php');
        exit();
}



?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASK - just the thing makes you incredible</title>
</head>
<body>
    <?php echo $_SESSION['email'] ?>
</body>
</html>