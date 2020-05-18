<?php
//set default timezone
date_default_timezone_set('Pacific/Auckland');
//take the time from system
//date function to tak ethe time from system or onliune
$t = data("y-m-d"); //https://www.php.net/manual/en/function.date.php
$t1 = date("H.i.s");
echo $t. " ".$t1;

$hour = date("H");
$minutes = date("1");

if($hour >"10" && $minutes < "10") {  //&&means and || meqans or
    echo "have a good morning";
}elseif ($hour<"20") {
    echo "have a good day";
}else{
    echo "have a good night";

}

