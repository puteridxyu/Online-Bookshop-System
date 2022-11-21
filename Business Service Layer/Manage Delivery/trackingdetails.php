<?php

$connection = mysqli_connect("127.0.0.1","root","","sdd");

if(!$connection)
{
	echo "Database connection faild...";
}

    $pid = $_GET['pid'];
    $tid = $_GET['tid'];
	$tdate = $_GET['tdate'];
	$rdate = $_GET['rdate'];
	$tsta = $_GET['tsta'];
   

    // insert data to database
    $insert = "INSERT INTO tracking (pid,tid,tdate,rdate,tsta) VALUES ('$pid','$tid','$tdate','$rdate','$tsta')";
    $result = mysqli_query($connection, $insert);

if($result)
{
	header("Location: http://localhost/sd/bookhome.php");
}
else
{
	echo "Error :".$sql;
}



?>