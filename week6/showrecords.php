<?php

include_once "databaseconnection.php";
$records = showRecords();
//print_r($records);

$i = 0;
    while ($i < sizeOf($records)){
    print_r($records[$i]); //arrayname index is the value --. value
    $record = $records[$i];
    ?>
        <p><?php echo $records[0]; ?> <?php echo $record[1]; ?> <?php echo $record[2]; ?> <?php echo $records[3]; ?></p>

<?php
        $i = $i + 1;
    }

