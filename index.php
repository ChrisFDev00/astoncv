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
    $rows = $conn->query("SELECT * FROM cvs");
    foreach ($rows as $row) {
    ?>
    <li> ID: <?= $row['id']  ?>,
        Name: <?= $row['name'] ?>,
        Email: <?= $row['email'] ?>,
        Password: <?= $row['password'] ?>,
        Programme: <?= $row['keyprogramming'] ?>,
        Profile: <?= $row['profile'] ?>,
        Education: <?= $row['education'] ?>,
        URL Links: <?= $row['URLlinks'] ?>,
     </li>
    <?php } ?>

</body>
</html>