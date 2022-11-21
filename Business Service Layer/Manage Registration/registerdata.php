<?php

$connection = mysqli_connect("127.0.0.1","root","","sdd");

if(!$connection)
{
	echo "Database connection faild...";
}
$fname = $lname = $gender = $email = $password = $pwd = '';

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$password  = $_POST['password'];

$sql = "INSERT INTO register (Firstname,Lastname,Gender,Email,Password) VALUES ('$fname','$lname','$gender','$email','$password')";
$result = mysqli_query($connection, $sql);

if($result)
{
	header("Location: http://localhost/SD/admin/login.php");
}
else
{
	echo "Error :".$sql;
}

?>