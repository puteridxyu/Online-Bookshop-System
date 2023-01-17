<?php

$connection = mysqli_connect("127.0.0.1","root","","sdd");

if(!$connection)
{
	echo "Database connection faild...";
}
$rname = $remail = $rdesc = $rsta ;

$rname = $_POST['rname'];
$remail = $_POST['remail'];
$rdesc  = $_POST['rdesc'];
$rsta  = $_POST['rsta'];

$sql = "INSERT INTO report (rname,remail,rdesc,rsta) VALUES ('$rname','$remail','$rdesc','$rsta')";
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