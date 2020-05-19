<?php

$grating = "hello"; //$this is syntex variable
$who = "myles";

echo $grating;
echo  $who;

echo "<h1>" . $grating . " " . $who . "</h1>";  //dont mean merge in php

$x = 4;
$y = 5;
echo "<p1>". "x = ".$x. "<p1>";
echo "<p2>". "y = ".$y. "<p2>";
echo "z = x + y = ".($x + $y);

$grating = "Hello world";
//lines of string
echo "<br>".strlen($grating). "string length </br>"; //stringlength
//word count -- count numbers of word in the string
echo str_word_count($grating)."string word count<br>";
    //string reverse
echo strrev($grating). "string reverse<br>";
//string position
echo strpos($grating, "Hello")."word position<br>";
//string replace
echo str_replace($grating,"Hello","byebye")."
word replace<br>";
//to uppercase
echo strtoupper($grating)."To Upper Case <br>";
//to lower
echo strtolower($grating). "To Lower Case <br>";
