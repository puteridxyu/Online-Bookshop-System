<?php

$connection = mysqli_connect("127.0.0.1","root","","sdd");

if(!$connection)
{
	echo "Database connection faild...";
}


	$id=$_GET['id'];;
	mysqli_query($connection,"delete from `books` where id='$id'");
	header('location:http://localhost/sd/Application%20Layer/Manage%20Stock/booklist.php');
?>