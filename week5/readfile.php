<?php

$file = fopen("hello.txt",  'r');    //f open all programming language,w write, a append
while (!feof($file)){
    echo fgets($file)."<br>";
}

fclose($file);