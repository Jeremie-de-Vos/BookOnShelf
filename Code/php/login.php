<?php
//Start the Session
session_start();
 require('connect.php');
//If the form is submitted or not.
//If the form is submitted
if (isset($_POST['username']) and isset($_POST['password'])){
//Assigning posted values to variables.
  $username = $_POST['username'];
  $password = $_POST['password'];
  //Checking the values are existing in the database or not
  $query = "SELECT * FROM `users` WHERE username='$username'";
  $sth = $dbh->prepare('SELECT *
      FROM users
      WHERE username = :username');
  $sth->bindParam(':username', $username, PDO::PARAM_STR);
  $result = $sth->execute();
  $user   = $sth->fetch(PDO::FETCH_ASSOC);

  //Login check
  if($password == $user['password']){
    echo "you'r logged in as: ".$user['username']."";
    //echo '<a href="index.php?page=home</a>';
  }else{
    echo "jammer dan, dat is fout!";
  }
}?>
