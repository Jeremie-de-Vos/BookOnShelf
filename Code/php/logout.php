<?php
session_start();
session_destroy();
heade('Location: login.php');
echo "CLOSED!!!!!!!!";
 ?>
