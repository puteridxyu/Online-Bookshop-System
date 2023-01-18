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
        echo '

        <div class="alert alert-success" style="position: absolute;
        top: 50%; left: 50%; transform: translate(-50%, -50%); width: 300px; font-size: 25px; text-align: center; border: 2px solid grey; height: 200px; width: 500px; font-family: Arial, Helvetica, sans-serif;
        "><br><br><br>The new item successfully added!</div>
    
        ';

        echo '<script>setTimeout(function(){window.location.href = "../../Application Layer/Manage Stock/booklist.php";},500);</script>';
    } 
    else
    {
        $message = "ERROR: Could not able to execute $insert. " . mysqli_error($connection);
    }
    // close connection
    mysqli_close($connection);
}

?>

