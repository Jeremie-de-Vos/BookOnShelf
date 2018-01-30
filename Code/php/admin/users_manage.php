<?php
$con=mysqli_connect("127.0.0.1","root","","bookonshelf");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
    echo "<table border='1'>
        <tr>
        <th>id</th>
        <th>Username</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Rolplay</th>
        <th>active</th>
        </tr>";
        $result = mysqli_query($con,"SELECT * FROM users");
        while($row = mysqli_fetch_array($result))
          {
        {
            echo "<tr contenteditable>";
        echo "<td>" . $row["user_id"]. "</td>";
        echo "<td>" . $row["username"]. "</td>";
        echo "<td>" . $row["first_name"]. "</td>";
        echo "<td>" . $row["last_name"]. "</td>";
        echo "<td>" . $row["email"]. "</td>";
        echo "<td>" . $row["admin"]. "</td>";
        echo "<td>" . $row["active"]. "</td>";

        echo "<td contenteditable = 'false'><button href = '#'>Update</a></td>";
            echo "</tr>";
        }
}

mysqli_close($con);
?>
