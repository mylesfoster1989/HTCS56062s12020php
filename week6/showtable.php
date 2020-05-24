<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>show my records</title>
</head>
<body>
<table>
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Password</th>
        <th>Name</th>
    </tr>
    <?php
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

    $sql = "select * from Users";
    $result = $conn->query ($sql); //run the query on this connection

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['username']."</td>";
            echo "<td>".$row['password']."</td>";
            echo "<td>".$row['name']."</td>";
            echo "</tr>";
        }


    }else{
        echo  "no result in table";
    }
    $conn->close();


    ?>
</body>
</html>