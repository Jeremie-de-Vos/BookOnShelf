<?php
$hostname = '127.0.0.1';
$username = 'root';
$password = '';
$dbh = new PDO("mysql:host=$hostname;dbname=bookonshelf",$username,$password);

$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
