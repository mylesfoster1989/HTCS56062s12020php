<?php
$server = "arfo8ynm6olw6vpn.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$user = "jo0xc9likdk5o0vx";
$pwd = "nvvui8agli8r5q6e";
$database = "bhdh4cks7ou9mirv";

$connection = new mysqli($server, $user, $pwd, $database); //create database connection
if ($connection->connect_error) {
    echo $connection->connect_error;
} else {
    echo "Connection Created";
}
session_start();
$username = $_SESSION["username"];

$sql = "select * from Users where username='$username'";
$result = $connection->query($sql);
if ($result->num_rows == 1){
    while ($row = $result->fetch_assoc()){
        echo "<p>".$row["id"]."</p>";
        echo "<p>".$row["username"]."</p>";
        echo "<p>".$row["password"]."</p>";
        echo "<p>".$row["name"]."</p>";
    }
}

?>
<p><a href="logout.php">Logout</a></p>