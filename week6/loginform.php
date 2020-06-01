<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
</head>
<body>
<?php
include_once "login.php";
session_start();
if (isset($_SESSION["username"])) { //IF LOGIN, ELSE SHOW FORM
    ?>

    <p><a href="profile.php">profile</a></p>
    <p><a href="changepasswordform.php">change password</a></p>
    <p><a href="logout.php">Logout</a></p>

    <?php

} else {
    ?>

    <!--HTML Code between php block-->
    <form action="<?php echo $_SERVER['PHP_SELF']; //POPST REQUEST TO SAME PAGE
    ?>" method="post">
        <p>Username: <input type="text" name="username" required></p>
        <p>Password: <input type="password" name="password" required></p>
        <p>
            <button>Login</button>
        </p> <!--Exact same to input type submit-->
    </form>
    <?php
}
?>
</body>
</html>