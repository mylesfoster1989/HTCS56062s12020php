<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>show my records</title>
</head>
<body>
<table>
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Password</th>
        <th>Name</th>
    </tr>
    <?php
    include_once "databaseconnection.php";
    $records = showRecords();
    //print_r($records);

    $i = 0;
    while ($i < sizeOf($records)) {
        //print_r($records[$i]); //arrayname index is the value --. value
        $record = $records[$i];
        ?>
        <tr>
            <td><?php echo $record->id; ?></td>
            <td> <?php echo $record->getUsername(); ?></td>
            <td><?php echo $record->getPassword(); ?></td>
            <td><?php echo $record->name; ?></td>
        </tr>
        <?php
        $i = $i + 1;
    }


    ?>
</table>
</body>
</html>