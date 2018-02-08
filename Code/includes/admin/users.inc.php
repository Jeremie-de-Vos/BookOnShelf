<!DOCTYPE html>
<html>
  <head>
    <title>Test</title>
  </head>
  <body>
    <div id="content">
      <div id="box">
        <form class="" action="index.html" method="post">
          <input type="search" name="search" id="search" placeholder="Search" >
          <input type="submit" name="submit" value="Submit" />
        </form>
      </div>
      <div id="user">
        <img src="images/Profile.png" alt="Book img">
        <div class="subject">
          <p>   ID:
          </br> Username:
          </br> First Name:
          </br> Last Name:
          </br> Email:
          </br> Rollplay:
          </br> Active:
          </p>
        </div>
        <form action="" method="post">
          <input type="text" name="user_id" value="auto" required disabled>
          <input type="text" name="user_name" value="">
          <input type="text" name="user_" value="">
          <input type="text" name="user_" value="">
          <input type="text" name="user_" value="">
          <input type="text" name="user_" value="">
          <input type="text" name="user_" value="">
          <button type="submit" name="Add">Add</button>
          <button type="submit" name="Clear" formaction="?page=users">Clear</button>
        </form>
      </div>';

      <?php   include "php/admin/users_manage.php"; ?>
    </div>
  </body>
</html>
