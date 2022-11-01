<?php

require '../databaseCon/db.inc.php';

$full_name = $_POST['fullname'];
$user_email = $_POST['email'];
$phone = $_POST['phone'];
$passwrod = $_POST['password'];
$conf_password  = $_POST['confirm_password'];


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
if(strlen($passwrod) < 6){
    header('Location: ../signup.php?error=invalid password-length');
    exit();
}
// passowrd verification
if($passwrod !== $conf_password){
    header('Location: ../signup.php?error=password doesnot match');
    exit();
}

  $sql = "INSERT INTO `data_info`(`Full_Name`, `Phone_No`, `Email`, `Password`) VALUES ('$full_name','$phone','$user_email','$passwrod')";

  if ($conn->query($sql) === TRUE) {
    header('Location: ../login.php');
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
