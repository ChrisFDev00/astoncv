<?php
include_once 'connectdb.php'
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AstonCV</title>
</head>
<body>

    <?php
    $rows = $dbcon->query("SELECT * FROM cvs");
    foreach ($rows as $row) {
    ?>
    <li> Name: <?= $row['name'] ?>,
    Programme: <?= $row['keyprogramming'] ?> </li>
    <?php } ?>

</body>
</html>