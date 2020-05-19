<?php
//set default timezone
date_default_timezone_set('Pacific/Auckland');
//take the time from system
//date function to tak ethe time from system or onliune
$t = data("y-m-d"); //https://www.php.net/manual/en/function.date.php
$t1 = date("H.i.s");
echo $t. " ".$t1;

$hour = intval(date("H"));
$minutes = intval(date("1"));
echo "<p>h: ".$hour."</p>";
echo "<p>m: ".$minutes."</p>";

if($hour>=10 && $minutes <=20) {  //&&means and || means or
    //work before 10:20
    echo "have a good morning";
}elseif ($hour<20) {
    //work before 2100
    echo "have a good day";
}else {
    echo "have a good night";
}
}else {
    //work after 2100 to 1020
    echo "have a good night";
}

