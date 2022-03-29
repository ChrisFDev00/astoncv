// Displays full list of db info=
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
*/
