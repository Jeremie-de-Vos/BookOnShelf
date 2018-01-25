<?php
  include "php/login.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <title>BOS | Login</title>
  </head>
  <body>
    <div class="login-box">
      <img src="images/Profile.png" class="avatar">
      <h1>Login here</h1>
      <form class="" action="?page=login" method="post">
        <p>Username</p>
        <input type="text" name="username" placeholder="Enter Username">
        <p>Password</p>
        <input type="password" name="password" placeholder="Enter Password">
        <input type="submit" name="submit" value="Login">
        <a href="#">Forget Password?</a>
      </form>
    </div>
  </body>
</html>

<?php // NOTE: if(Login wass succesfull)"go to home page"else stay)?>
<?php
if(array_key_exists('submit',$_POST)){

} ?>
