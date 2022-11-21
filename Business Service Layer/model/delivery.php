<?php

$link = mysqli_connect("localhost:3307", "root", "");
if (!$link) {
    die('Could not connect: ' . mysqli_connect_error());
}

mysqli_select_db($link, "sdd") or die(mysqli_connect_error());

//Then, create a database named “sdd”.

$sql = "CREATE TABLE delivery (id INT, fname VARCHAR(200), address VARCHAR(200), state VARCHAR(200), poss INT, num VARCHAR(20))";


if (mysqli_query($link, $sql)) {
    echo "Table created successfully\n";
} else {
    echo 'Error creating table: ' . mysqli_error($link) . "\n";
}

//And finally we close the connection to the MySQL server
mysqli_close($link);
?>