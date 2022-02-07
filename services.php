<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "exile_db";

  // Create connection
  $conn = new mysqli("$servername", $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  if(empty( $_REQUEST['firstname'])){
    $firstname ="";
  }else{
    $firstname = $_REQUEST['firstname'];
  }
  if(empty( $_REQUEST['secondname'])){
    $secondname = "";
  }else
  $secondname = $_REQUEST['secondname'];
  if(empty($_REQUEST['surname'])){
    $surname = "";
  }else
  $surname = $_REQUEST['surname'];
  if(empty( $_REQUEST['email'])){
    $email="";
  }else
  $email = $_REQUEST['email'];
  if(empty( $_REQUEST['gender'])){
    $gender="";
  }else
  $gender = $_REQUEST['gender'];
  if(empty( $_REQUEST['marital_status'])){
    $marital_status ="";
  }else
  $marital_status  = $_REQUEST['marital_status'];
  if(empty($_REQUEST['username'])){
    $username  ="";
  }else
  $username  = $_REQUEST['username'];
  if(empty($_REQUEST['password'])){
    $password  ="";
  }else
  $password  = $_REQUEST['password'];
  
    $sql = "INSERT INTO registration VALUES ('$firstname','$secondname', '$surname', '$username' , ' $gender', '$email',' $password', '$marital_status')";
  
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } 
  $conn->close();
  ?>