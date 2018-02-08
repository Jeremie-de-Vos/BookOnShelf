<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookonshelf";
$id = $_GET['id'];

$_username = $_POST["user_username"];
$_firstname = $_POST["user_firstname"];
$_lastname = $_POST["user_lastname"];
$_email = $_POST["user_email"];
$_admin = $_POST["user_admin"];
$_active = $_POST["user_active"];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE `users` SET
    `username`=$_username,
    `first_name`=$_firstname,
    `last_name`=$_lastname,
    `email`=$_email
     WHERE user_id=$id";
    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();

    // echo a message to say the UPDATE succeeded
    echo $stmt->rowCount() . " records UPDATED successfully";
    }
    catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>
