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
        <form role="form" action="" method="post">
          <input type="text" name="id" value="9"required disabled>
          <input type="text" name="idt" value="test2">
          <input type="text" name="idd" value="">
          <input type="text" name="idd" value="">
          <input type="text" name="idd" value="">
          <input type="text" name="idd" value="">
          <input type="text" name="idd" value="">
          <button type="submit" name="update">Update</button>
          <button type="submit" name="delete">Remove</button>
        </form>
      </div>';

      <?php   include "php/admin/users_manage.php"; ?>
    </div>
  </body>
</html>
