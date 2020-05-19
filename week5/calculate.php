<?php
if (isset($_POST["width"])) { //checks post data
    $w = $_POST["width"];
    $h = $_POST["height"];
//corresponding to my function input height an dwidth
    echo "Area: " .calculateArea($w, $h);
} else {
    echo "go back to form page";
}
 //$area =$w * $h // formula
//f(x.y) = x * y
function calculateArea($width, $height) {//parameters for input
    return $width * $height;
//    return give result out
}