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
    <link href="css/style.css" rel="stylesheet" type="text/css" />
  </head>
</html>


<?php include 'includes/navbar.inc.php'; ?>
<?php include 'includes/'.$page.'.inc.php'; ?>

<?php // NOTE: if(Login wass succesfull)"go to home page"else stay)?>
<?php



if(array_key_exists('submit',$_POST)){
} ?>
