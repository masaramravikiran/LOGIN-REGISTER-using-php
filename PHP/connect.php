<?php

include 'connect.php';

if(isset($_POST['signUp'])){
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $password=md5($password);

  $checkEmail = "SELECT * FROM users WHERE email = '$email'";
  $result = mysqli_query($conn, $checkEmail);
  if($result->num_rows>0){
    echo "Email Address Already Exits !";
  }
  else{
    $insertQuery="INSERT INTO users(firstName,lastName,email,passwprd " VALUES ('$firstName','$lastName','$email','$password')
    if($conn->query($insertQuery)===TRUE){
      echo "Registration Successful !";
    }
  }
}
if(isset($_POST['signIn'])){
  $email = $_POST['email'];
  $password = $_POST['password'];
  $password=md5($password);

  $checkEmail = "SELECT * FROM users WHERE email = '$email' AND password = 'XXXXXXXXX'";
  $result = mysqli_query($conn, $checkEmail);
  if($result->num_rows>0){
    echo "Login Successful !";
  }
  else{
    echo "Invalid Email or Password !";
  }
}