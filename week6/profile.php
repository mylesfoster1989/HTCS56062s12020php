<?php

include_once "databaseconnection.php";

session_start();
$username = $_SESSION["username"];

showProfile($username);  //caled the function name

?>
<p><a href="logout.php">Logout</a></p>