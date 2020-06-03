<?php
/**
 * Author: myles foster
 * Date: 26 May 2020
 * Version: 1.0
 * Purpose: for login
 */

if (isset($_POST["username"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    include_once "databaseconnection.php";

    if (login($username, $password)) { // if tru login}
        session_start();
        $_SESSION["username"] = $username;
    } else { //login fail
        echo "wrong user name or password";

    }


}
?>