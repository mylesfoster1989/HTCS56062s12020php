<?php
$res = $_POST["mark"]; //can do get instead of post
if ($res > 100 || $res <0) { //condition
    echo "wrong input";

}elseif($res > 90){
    echo "A";


}elseif($res > 80){
    echo "B";

}elseif($res > 50){
    echo "C";

}elseif($res > 0){
    echo "D";

}
