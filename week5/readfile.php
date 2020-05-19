<?php

$file = fopen("helloworld.txt",  'r');    //fopen all progrsmming language,w write, a append
while (!feof($file)){
    echo fgets($file)."<br>";
}

fclose($file);