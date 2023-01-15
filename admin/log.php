<?php

$conn = mysqli_connect("127.0.0.1","root","","sdd");

if(!$conn)
{
	echo "Database connection faild...";
}
$email = $password = $pwd = '';

$email = $_POST['email'];
$password = $_POST['password'];
$sql = "SELECT * FROM register WHERE Email='$email' AND Password='$password'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$id = $row["ID"];
		$email = $row["Email"];
		session_start();
		$_SESSION['id'] = $id;
		$_SESSION['email'] = $email;
	}
	header("Location: ../bookhome.php");
}
else
{
	echo "Invalid email or password";
}
?>