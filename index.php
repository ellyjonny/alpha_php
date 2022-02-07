<!DOCTYPE html>
<html>

<head>

  <link rel="stylesheet" type="text/css" href="amazingstyle.css">

  <title>authentication file</title>
</head>

<body>
  <div class="error"><?php
                      $firstnameErr = $emailErr = $genderErr = $marital_statusErr = "";
                      $secondnameErr = $surnameErr = $usernameErr = "";
                      ?>
  </div>
  <?php

  $firstname = $secondname = $surname = $email = '';
  $marital_status = $username = $password = $gender = '';



  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'services.php';

    $password = check_input($_POST["password"]);

    if (empty($_POST["firstname"])) {
      $firstnameErr = "firstname is required";
    } else
      $firstname = check_input($_POST["firstname"]);

    if (empty($_POST["secondname"])) {
      $secondnameErr = "secondname is required";
    } else
      $secondname = check_input($_POST["secondname"]);

    if (empty($_POST["surname"])) {
      $surnameErr = "surname is required";
    } else
      $surname = check_input($_POST["surname"]);

    if (empty($_POST["email"])) {
      $emailErr = "email is required";
    } else
      $email = check_input($_POST["email"]);
    if (empty($_POST["username"])) {
      $usernameErr = "username is required";
    } else
      $username = check_input($_POST["username"]);
    if (empty($_POST["gender"])) {
      $genderErr = "gender is required";
    } else
      $gender = check_input($_POST["gender"]);
    if (empty($_POST['marital_status'])) {
      $marital_statusErr = "You didn't select any status.";
    } else {
      $marital_status = check_input($_POST['marital_status']);
    }
  }

  function check_input($data)
  {
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripcslashes($data);
    return $data;
  }

  include ('registration.html');
  ?>
  
</body>

</html>