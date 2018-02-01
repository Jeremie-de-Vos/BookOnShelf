<?php
$con=mysqli_connect("127.0.0.1","root","","bookonshelf");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$result = mysqli_query($con,"SELECT * FROM books");
while($row = mysqli_fetch_array($result))
{
      echo '      <div id="user">
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
                <input type="text" name="id" value="' . $row['user_id'] . '" disabled>
                <input type="text" name="id" value="' . $row['username'] . '">
                <input type="text" name="id" value="' . $row['first_name'] . '">
                <input type="text" name="id" value="' . $row['last_name'] . '">
                <input type="text" name="id" value="' . $row['email'] . '">
                <input type="text" name="id" value="' . $row['admin'] . '">
                <input type="text" name="id" value="' . $row['active'] . '">
              </div>
              <button type="button" name="update">Update</button>
              <button type="button" name="remove">Remove</button>
            </div>';
}


mysqli_close($con);
?>
