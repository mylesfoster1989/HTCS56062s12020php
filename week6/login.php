<?php
/**
 * Author: Lei Song
 * Date: 26 May 2020
 * Version: 1.0
 * Purpose: for login
 */
include_once "databaseconnection.php";

if (isset($_POST["username"])){
    $username = $_POST["username"];
    $password = $_POST["password"];





    // is the username in my table
    $sql = "select * from Users where username = '$username'"; //this is our query
    $result = $connection->query($sql); //run query on this connection through method query()
    if ($result->num_rows == 1){ // means user exist in our database
        while ($row = $result->fetch_assoc()){
            if ($row["password"] == $password){ //check password
                echo "access granted";
                session_start();
                $_SESSION["username"] = $username; //set session here
                // if login, we allow user to do something

            }else{
                echo "wrong password";
            }
        }
    } else{
        echo "wrong username";
    }
    $connection->close(); //close my connection

}else{
    ?>
    <script>
        window.open("loginform.html","_self"); // go to login form
    </script>
    <?php
}
?>
