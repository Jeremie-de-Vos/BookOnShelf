<?php session_start(); ?>
<?php
if (isset($_GET['page'])) {
  $page = $_GET['page'];
}else {
  $page = 'home';
}
 ?>

<!DOCTYPE html>
<html>
  <head>
    <link href="css/style0.css" rel="stylesheet" type="text/css" />
  </head>
</html>

<?php
//check if loggedin
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
{
  if ($_SESSION['admin'] == true) {
      //if Admin
    include 'includes/admin/navbar.inc.php';
    include 'includes/admin/'.$page.'.inc.php';
  }else {
    //if Member
    include 'includes/navbar.inc.php';
    include 'includes/'.$page.'.inc.php';
  }
  //redirect to the correct page

}
 else{
   //if not the right combination or not loggedin
    include 'includes/login.inc.php';} ?>
