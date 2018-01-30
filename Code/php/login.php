<?php
session_start();
 require('connect.php');
//If the form is submitted
if (isset($_POST['username']) and isset($_POST['password'])){
//Assigning posted values to variables.
  $username = $_POST['username'];
  $password = $_POST['password'];
  //Checking the values are existing in the database or not
  $query = "SELECT * FROM `users` WHERE username='$username'";
  //Location of TABLE and COLLUM
  $sth = $dbh->prepare('SELECT *
      FROM users
      WHERE username = :username');
  $sth->bindParam(':username', $username, PDO::PARAM_STR);
  $result = $sth->execute();
  $user   = $sth->fetch(PDO::FETCH_ASSOC);

  //Login check
  if($password == $user['password']){
      $_SESSION['loggedin'] = true;
      $_SESSION['user_id'] = $user['user_id'];
      $_SESSION['username'] = $user['username'];
      //no password
      $_SESSION['first_name'] = $user['first_name'];
      $_SESSION['last_name'] = $user['last_name'];
      $_SESSION['email'] = $user['email'];
      $_SESSION['admin'] = $user['admin'];
      $_SESSION['active'] = $user['active'];
      header('Location: ?page=home');
    }
  }
?>
