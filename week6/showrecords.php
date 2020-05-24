<?php
$server =  "arfo8ynm6olw6vpn.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$user =  "jo0xc9likdk5o0v";
$pwd = " nvvui8agli8r5q6e";
$database ="bhdh4cks7ou9mirv";

$conn = new mysqli($server,$user,$pwd,$database);
if ($conn->connect_error){
    echo $conn->connection_error;
}else{
    echo "Connection Created";
}