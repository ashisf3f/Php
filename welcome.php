<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
        header('Location: login.php');
        exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>ASK - just the thing makes you incredible</title>
</head>
<style>
    /* @media (prefers-color-scheme: dark) {
  html {
    color-scheme: dark;
  }
  body {
    color: white;
    background: black;
  }
} */
    html{
        scroll-behavior: smooth;
    }
</style>

<body>
    <?php 
    // echo  $_SESSION['email']
    require 'components/navbar.php';
    require 'components/home.php';
    ?>

</body>
</html>