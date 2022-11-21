<?php

$connection = mysqli_connect("127.0.0.1","root","","sdd");

if(!$connection)
{
	echo "Database connection faild...";
}
    $fname = $_GET['fname'];
    $address = $_GET['address'];
    $state = $_GET['state'];
    $poss = $_GET['poss'];
    $num  = $_GET['num'];

    // insert data to database
    $insert = "INSERT INTO delivery (fname,address,state,poss,num) VALUES ('$fname','$address','$state','$poss','$num')";
    $result = mysqli_query($connection, $insert);

if($result)
{
	header("Location: http://localhost/sd/Application%20Layer/Manage%20Payment/payment.php");
}
else
{
	echo "Error :".$sql;
}



?>