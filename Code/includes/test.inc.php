<?php
  if(md5($password) == $user['password']){
    include 'includes/navbar.inc.php';
    echo "you'r logged in as: ".$user['password']."";
  }else{
    echo "oei";
  } ?>






  <?php
  //if the user is logged in Greets the user with message
  if (isset($_SESSION['username'])){
    $username = $_SESSION['username'];
    echo "Hai " . $username . "
    ";
    echo "This is the Members Area
    ";
    echo "<a href='logout.php'>Logout</a>";

  }else{
  //When the user visits the page first time, simple login form will be displayed.
  }?>
