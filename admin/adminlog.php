<?php

$conn = mysqli_connect("127.0.0.1","root","","sdd");

if(!$conn)
{
	echo "Database connection faild...";
}
$aemail = $apass  ;

$aemail = $_POST['aemail'];
$apass = $_POST['apass'];
$sql = "SELECT * FROM admin WHERE aemail='$aemail' AND apass='$apass'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$id = $row["ID"];
		$aemail = $row["aemail"];
		session_start();
		$_SESSION['id'] = $id;
		$_SESSION['aemail'] = $aemail;
	}
	header("Location: http://localhost/sd/admin/adminpage.php");
}
else
{
	echo "Invalid email or password";
}
?>