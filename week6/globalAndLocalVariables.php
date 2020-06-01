<?php
//global variables can be used anywhere

//locasl variable only cxan be used insde a function

$a = 4;
$b = 5;

function cal(){
    echo "a = " ,$GLOBALS['a']."<br>";
    echo "b = " ,$GLOBALS ['b']."<br>" ;
    return $GLOBALS['a'] * $GLOBALS['b'];
}

function cal1(){
    $c=6;
    return $GLOBALS ['a'] * $GLOBALS['b'] * $c;
}

function cal2(){
    return $GLOBALS ['a'] * $GLOBALS['b'] * $GLOBALS['c'];
}

echo cal()."<br>";
echo cal1()."<br>";
echo cal2()."<br>";


