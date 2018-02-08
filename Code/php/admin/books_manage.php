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
      echo '      <div id="bookmanage">
              <img src="images/books.png" alt="Book img">
              <div class="subject">
                <p>   ID:
                </br> Name:
                </br> Author:
                </br> Status:
                </p>
              </div>
              <div class="result">
                <input type="text" name="boook_id" value="' . $row['book_id'] . '" disabled>
                <input type="text" name="book_name" value="' . $row['name'] . '">
                <input type="text" name="book_author" value="' . $row['author'] . '">
                <input type="text" name="book_statuss" value="' . $row['status'] . '">
              </div>
              <button type="button" name="update">Update</button>
              <button type="button" name="remove">Remove</button>
            </div>';
}


mysqli_close($con);
?>
