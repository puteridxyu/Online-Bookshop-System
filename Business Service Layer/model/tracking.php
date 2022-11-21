<?php

$link = mysqli_connect("localhost:3307", "root", "");
if (!$link) {
    die('Could not connect: ' . mysqli_connect_error());
}

mysqli_select_db($link, "sdd") or die(mysqli_connect_error());

//Then, create a database named “sdd”.

$sql = "CREATE TABLE tracking (id INT, pid INT, tid INT, tdate VARCHAR(100), rdate VARCHAR(100), tsta VARCHAR(100))";


if (mysqli_query($link, $sql)) {
    echo "Table created successfully\n";
} else {
    echo 'Error creating table: ' . mysqli_error($link) . "\n";
}

//And finally we close the connection to the MySQL server
mysqli_close($link);
?>