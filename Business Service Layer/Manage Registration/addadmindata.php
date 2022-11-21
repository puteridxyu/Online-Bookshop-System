<?php
$connection = mysqli_connect("127.0.0.1","root","","sdd");

if(!$connection)
{
	echo "Database connection faild...";
}
$select =   "SELECT * FROM `admin`";
$retrive = mysqli_query($connection, "SELECT * FROM admin");


$message    =   '';
if(isset($_POST['submit']))
{
    $aname       = $_POST['aname'];
    $aemail   =   $_POST['aemail'];
	$apass       = $_POST['apass'];

    // insert data to database
    $insert = "INSERT INTO admin (aname, aemail, apass) VALUES ('$aname', '$aemail','$apass')";
    if(mysqli_query($connection, $insert))
    {
        $message =  "Records added successfully.";
		header("Location: http://localhost/sd/Application%20Layer/Manage%20Registration/admindetails.php");
    } 
    else
    {
        $message = "ERROR: Could not able to execute $insert. " . mysqli_error($connection);
    }
    // close connection
    mysqli_close($connection);
}

?>