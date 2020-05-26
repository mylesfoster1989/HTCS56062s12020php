<?php
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

$sql = "select password from Users where username='something'";
$result = $conn->query($sql);
if ($result->num_rows == 1) {
    while ($row = $result->fetch_assoc()) {
        $oldPwdInDb = $row["password"];
    }



}
if (isset($_POST["oldpwd]"])) { //isset check variable exist or not
    if ($_POST["oldpwd"] == $oldPwdInDb) {
        $sql = "update Users set password = '";
        $sql .= $_POST["newpwd"];
        $sql .= "'where username = 'something'";
        $result = $conn->query($sql);
        echo "password changed";

    } else {
        echo "go back, input again";
    }

}