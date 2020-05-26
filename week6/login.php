<?php
/**
 *?author: l s
 *date:25 may
 *version:1.0
 *purpose:login*/

if (isset($_POST["username"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $server = "arfo8ynm6olw6vpn.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    $user = "jo0xc9likdk5o0vx";
    $pwd = "nvvui8agli8r5q6e";
    $database = "bhdh4cks7ou9mirv";

    $conn = new mysqli($server, $user, $pwd, $database); //create database connection
    if ($conn->connect_error) {
        echo $conn->connect_error;
    } else {
        echo "Connection Created";
    }
//is the username in my table
    $sql = "select  * from Users where username = '$username'"; //this is 0ur query
    echo $sql ;
    $result = $conn->query($sql); //from query on this connection through method query()
    if ($result->num_rows == 1) { //means user exist in our database
        while ($row = $result->fetch_assoc()) {
            if ($row["password"] == $password) { //check password
                echo "access granted";
                //if login, we allow user to do something
                ?>
                <p><a href="profile.php">profile</a></p>
                <p><a href="changepassword.php">change passsword</a></p>
                <?php
            } else {
                echo "wrong password";
            }
        }
    } else {
        echo "wrong username";
    }
    $conn->close(); //close my connection


} else {
    ?>
    <script>
        window.open("lgoinform.html","-self"); // go to log in form
    </script>
    <?php
}