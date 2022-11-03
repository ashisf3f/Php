<?php

require '../databaseCon/db.inc.php';

$email = $_POST['email'];
$password = $_POST['password'];
// email check
if(empty($email)){
    header('Location: ../login.php?error=empty-email');
    exit();
}
// password check

if(empty($password)){
    header('Location: ../login.php?error=empty-password');
  
    exit();
}

$sql = "SELECT * from data_info Where   Email='$email' AND Password = '$password'";
$name = strstr($email, '@', true);

$result = mysqli_query($conn , $sql );
$num  = mysqli_num_rows($result);

if($num == 1){
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['name']= $name;
        $_SESSION['email']= $email;
        header('Location: ../welcome.php');
}
else{
    header("Location: ../login.php?error=invalid-credintials");
    exit();
}
// echo $email.$password;