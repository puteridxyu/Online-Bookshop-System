<?php

$connection = mysqli_connect("127.0.0.1","root","","sdd");

if(!$connection)
{
	echo "Database connection faild...";
}

    $nname = $_GET['nname'];
    $bname = $_GET['bname'];
	$cash = $_GET['cash'];
    $card = $_GET['card'];
    $date = $_GET['date'];
	$numb = $_GET['numb'];
	$sta = $_GET['sta'];

    // insert data to database
    $insert = "INSERT INTO payment (nname,bname,cash,card,date,numb,sta) VALUES ('$nname','$bname','$cash','$card','$date','$numb','$sta')";
    $result = mysqli_query($connection, $insert);

if($result)
{
	header("Location: http://localhost/sd/Application%20Layer/Manage%20Payment/paymentstatus.php");
}
else
{
	echo "Error :".$sql;
}



?>