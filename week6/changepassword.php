<?php
$server =  "arfo8ynm6olw6vpn.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$user =  "jo0xc9likdk5o0vx";
$pwd = "nvvui8agli8r5q6e";
$database = "bhdh4cks7ou9mirv";

$connection = new mysqli($server,$user,$pwd,$database); //create database connection
if ($connection->connect_error){
    echo $connection->connect_error;
}else{
    echo "Connection Created";
}
session_start();  //either you use session or set session, you must have session start
$username = $_SESSION["username"]; //use session

$sql = "select password from Users where username='$username'";
$result = $connection->query($sql);
if ($result->num_rows == 1) {
    while ($row = $result->fetch_assoc()) {
        $oldPwdInDb = $row["password"];
    }
}

if (isset($_POST["oldpwd"])) { //isset check variable exist or not
    if ($_POST["oldpwd"] == $oldPwdInDb) {
        $sql = "update Users set password = '";
        $sql .= $_POST["newpwd"];
        $sql .= "'where username = '$username'";
        $result = $connection->query($sql);
        echo "password changed";
    } else {
        echo "go back, input again";
    }

}
$connection->close();
?>
<p><a href="logout.php">Logout</a></p>