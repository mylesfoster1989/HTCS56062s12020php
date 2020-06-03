<?php

include_once "databaseconnection.php";
$records = showRecords();
//print_r($records);

$i = 0;
    while ($i < sizeOf($records)){
    //print_r($records[$i]); //arrayname index is the value --. value
    $record = $records[$i]; // inside each record we have aplace 0 for id,place 1 for username, place 2 for password
    ?>
        <p><?php echo $record->id;
        ?> <?php echo $record->username;
        ?> <?php echo $record->password;
        ?> <?php echo $record->name; ?>
        </p>

<?php
        $i = $i + 1;
    }

