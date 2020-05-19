<?php
$res = $_POST["mark"];
if ($res > 50){ //condition
    echo "pass";

}else {
        pass = "no";

}

     showGrade = document.getElementById("showGrade")
     if (mark > 90 && mark <= 100) {
         grade = "A";
     }
     if (mark > 75 && mark <= 90) {
         grade = "B";
     }
     if (mark > 60 && mark <= 75) {
         grade = "C";
     }
     if (mark > 50 && mark <= 60) { // && means
         grade = "D";
     }
     if (mark > 100 || mark < 0) // || means or !means not {
         grade = "Wrong Input";
 }