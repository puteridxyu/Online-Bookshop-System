<?php

$connection = mysqli_connect("127.0.0.1","root","","sdd");

if(!$connection)
{
	echo "Database connection faild...";
}
$rdate = $rname = $remail = $rdesc = $rsta ;

$rdate = $_POST['rdate'];
$rname = $_POST['rname'];
$remail = $_POST['remail'];
$rdesc  = $_POST['rdesc'];
$rsta  = $_POST['rsta'];

$sql = "INSERT INTO report (rdate,rname,remail,rdesc,rsta) VALUES ('$rdate','$rname','$remail','$rdesc','$rsta')";
$result = mysqli_query($connection, $sql);

if($result)
{
	header("Location: ../../Application Layer/Manage Report/reportview.php");
}
else
{
	echo "Error :".$sql;
}

?>