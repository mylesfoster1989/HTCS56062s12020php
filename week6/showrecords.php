<?php
$server =  "arfo8ynm6olw6vpn.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$user =  "jo0xc9likdk5o0vx";
$pwd = "nvvui8agli8r5q6e";
$database = "bhdh4cks7ou9mirv";

$conn = new mysqli($server,$user,$pwd,$database); //create database connection
if ($connection->connect_error){
    echo $connection->connect_error;
}else{
    echo "Connection Created";
}

$sql = "select * from Users"; // create query
$result = $connection->query($sql); //run the query on this connection

if ($result->num_rows > 0){ //check if there is record in the result
    while ($row = $result->fetch_assoc()){ //show each associated row
        echo $row['id']." ".$row['username']." ".$row['password']." ".$row['name']."<br>"; // in each row, we have columns.
    }
}else{
    echo "no result in the table";
}
$connection->close();

