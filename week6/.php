<?php
/**
*?author: l s
*date:25 may
*version:1.0
*purpose:login*/

if (isset($))

$username = $_POST["username"];
$password = $POST["password"];

  $server =  "arfo8ynm6olw6vpn.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    $user =  "jo0xc9likdk5o0vx";
    $pwd = "nvvui8agli8r5q6e";
    $database = "bhdh4cks7ou9mirv";

    $conn = new mysqli($server,$user,$pwd,$database); //create database connection
    if ($conn->connect_error){
        echo $conn->connect_error;
    }else{
        echo "Connection Created";
    }
//is the username in my table
$sql = "select  * username from Users where username = '$username'"; //this is 0ur query
$result = $conn->query($sql); //from query on this connection through method query()
if ($result->num_rows == 1 ) { //means user exist in our database
    while ($row = $result->fetch_assoc()){
        if ($row["$password"] == $password) { //check password
            echo "access granted";
        } else {
            echo "wrong password";
        }
    }
}else {
    echo "wrong username";
}


}else{
    ?>
    <script>
    window.open("lgoinform.html"); // go to log in form
</script>
<?php
}