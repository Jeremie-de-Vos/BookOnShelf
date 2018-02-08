<?php
$con=mysqli_connect("127.0.0.1","root","","bookonshelf");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$result = mysqli_query($con,"SELECT * FROM users");
while($row = mysqli_fetch_array($result))
{
      echo '
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
              <div class="result">
                <form action="php/admin/remove_user.php?id=9" method="post">
                  <input type="text" name="user_id" value=' . $row['user_id'] . ' disabled>
                  <input type="text" name="user_username" value="' . $row['username'] . '">
                  <input type="text" name="user_firstname" value="' . $row['first_name'] . '">
                  <input type="text" name="user_lastname" value="' . $row['last_name'] . '">
                  <input type="text" name="user_email" value="' . $row['email'] . '">
                  <input type="text" name="user_admin" value=' . $row['admin'] . '>
                  <input type="text" name="user_active" value=' . $row['active'] . '>
                  </div>
                  <button type="submit" name="update" formaction="php/admin/update_user.php?id="'. $row['user_id'] .'>Update</button>
                  <button type="submit" name="delete" formaction="php/admin/remove_user.php?id='. $row['user_id'] .'">Remove</button>
                </form>
            </div>';
}


mysqli_close($con);
?>
