<?php
$connection = mysqli_connect("127.0.0.1","root","","sdd");

if(!$connection)
{
	echo "Database connection faild...";
}

$select =   "SELECT * FROM `books`";
$retrive = mysqli_query($connection, "SELECT * FROM books");
$option = mysqli_query($connection, "SELECT * FROM cat");


$message    =   '';
if(isset($_POST['submit']))
{
    $name       = $_POST['name'];
    $category    =   $_POST['category'];
	$description       = $_POST['description'];
    $page    =   $_POST['page'];
	$edition       = $_POST['edition'];
    $isbn    =   $_POST['isbn'];
	$price       = $_POST['price'];
    $file   =   addslashes(file_get_contents($_FILES['img']['tmp_name']));

    // insert data to database
    $insert = "INSERT INTO books (name, category, description, page, edition, isbn, price, img) VALUES ('$name', '$category','$description', '$page','$edition', '$isbn','$price', '$file')";
    if(mysqli_query($connection, $insert))
    {
        $message =  "Records added successfully.";
		header("Location: http://localhost/sd/Application%20Layer/Manage%20Stock/booklist.php");
    } 
    else
    {
        $message = "ERROR: Could not able to execute $insert. " . mysqli_error($connection);
    }
    // close connection
    mysqli_close($connection);
}

?>

