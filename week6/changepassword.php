<?php
include_once "databaseconnection.php";

session_start();  //either you use session or set session, you must have session start
$username = $_SESSION["username"]; //use session


changePassword($username)
?>
<p><a href="logout.php">Logout</a></p>