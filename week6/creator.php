<?php
include_once "class/User.php";

$newUser = new User(0,'username','password','name');
$newUser->save();