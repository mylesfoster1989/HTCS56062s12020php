<?php

include_once "databaseconnection.php";
$records = showRecords();
print_r($records);

$i = 0
    while ($i < sizeOf($records)){
    print_r($records[i]);
    }

