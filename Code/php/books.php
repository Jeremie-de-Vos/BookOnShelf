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
  if (strpos(strtolower($row['name']), strtolower('Book')) !== false) {
    echo '
     <div id="book">
            <img src="images/Book.jpg" alt="Book img">
            <p>   Name:   ' . $row['name'] . '
            </br> Author: ' . $row['author'] . '
            </br> Status: ' . $row['status'] . '
            </p>


     </div>';
   }
}

mysqli_close($con);
?>
