<?php

require '../databaseCon/db.inc.php';

$full_name = $_POST['fullname'];
$user_email = $_POST['email'];
$phone = $_POST['phone'];
$password1 = $_POST['password'];
$conf_password  = $_POST['confirm_password'];

//  hash [passwored]
// $hash = hash('sha256', $password1);

// function createSalt()
// {
//     $text = md5(uniqid(rand(), TRUE));
//     return substr($text, 0, 3);
// }

// $salt = createSalt();
// $password = hash('sha256', $salt . $hash);

// phone no validate
if(!is_numeric($phone)){
  header('Location: ../signup.php?error=invalid phone-number');
    exit();
}
//email_validation
if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
    // $emailErr = "Invalid email format";
    header('Location: ../signup.php?error=invalid email');
    exit();
}
// password validation
if(strlen($password1) < 6){
    header('Location: ../signup.php?error=invalid password-length');
    exit();
}


$existSql = "SELECT * FROM `data_info` WHERE Email = '$user_email'";
$result = mysqli_query($conn , $existSql);
$numExistRow = mysqli_num_rows($result);

if($numExistRow > 0){
  header('Location: ../signup.php?error=user-exist-aldready');
  exit();
}


else{
  $exists = false;
// passowrd verification
if($password1 == $conf_password){
  $password = password_hash($password1 , PASSWORD_DEFAULT);
  $sql = "INSERT INTO `data_info`(`Full_Name`, `Phone_No`, `Email`, `Password`) VALUES ('$full_name','$phone','$user_email','$password')";
  $result = mysqli_query($conn , $sql);
  if($result){
    header('Location: ../login.php');
  }
}
else {
  header('Location: ../signup.php?error=password doesnot match');
  exit();
}
}