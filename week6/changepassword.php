<?php
include_once "databaseconnection.php";

session_start();  //either you use session or set session, you must have session start
$username = $_SESSION["username"]; //use session
$oldpwd = $_POST["oldpwd"];
$newPwd = $_POST["newpwd"];
if (changePassword($username, $oldpwd, $newPwd)){
    echo "password changed";
}else{
    echo "password not changed";
}
?>
<p><a href="logout.php">Logout</a></p>