<?php
$server = "arfo8ynm6olw6vpn.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$user = "jo0xc9likdk5o0vx";
$pwd = "nvvui8agli8r5q6e";
$database = "bhdh4cks7ou9mirv";

/**
 * @return mysqli a connection
 */
function dbconn()
{
    $connection = new mysqli($GLOBALS['server'], $GLOBALS['user'], $GLOBALS['pwd'], $GLOBALS['database']); //create database connection
    if ($connection->connect_error) {
        echo $connection->connect_error;
    } else {
        return $connection; //RETURN DB CONNECTION OUT
    }
}


function login($username, $password){
    // return true/false return give result bk and jump out from ths function. any code after return wont be run
    $conn = dbconn(); //c db connection fro function



    $sql = "select * from Users where username = '$username'"; //this is our query
    $result = $conn->query($sql); //run query on this created connection through method query()
    if ($result->num_rows == 1) { // means user exist in our database
        while ($row = $result->fetch_assoc()) {
            if ($row["password"] == $password) { //check password
                $conn->close();
                return true; //login
            } else { //usenme corrct ,check pssswrd
                $conn->close();
                return false; // cnt login
            }
        }
    } else{   //username
        $conn->close();
        return false; //cnt login
    }
}