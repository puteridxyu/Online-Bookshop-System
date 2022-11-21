<?php

$link = mysqli_connect("localhost:3307", "root", "");
if (!$link) {
    die('Could not connect: ' . mysqli_connect_error());
}

mysqli_select_db($link, "sdd") or die(mysqli_connect_error());

//Then, create a database named “sdd”.

$sql = "CREATE TABLE payment (id INT, nname VARCHAR(200), bname VARCHAR(200), cash INT, card VARCHAR(200), date VARCHAR(200), numb INT, sta VARCHAR(100))";


if (mysqli_query($link, $sql)) {
    echo "Table created successfully\n";
} else {
    echo 'Error creating table: ' . mysqli_error($link) . "\n";
}

//And finally we close the connection to the MySQL server
mysqli_close($link);
?>