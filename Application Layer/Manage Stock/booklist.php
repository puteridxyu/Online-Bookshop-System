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
    $page   =   $_POST['page'];
	$edition       = $_POST['edition'];
    $isbn    =   $_POST['isbn'];
	$price       = $_POST['price'];
    $img    =   $_POST['img'];

    // insert data to database
    $insert = "INSERT INTO books (name, category, description, page, edition, isbn, price, img) VALUES ('$name', '$category','$description', '$page','$edition', '$isbn','$price', '$img')";
    if(mysqli_query($connection, $insert))
    {
        $message =  "Records added successfully.";
    } 
    else
    {
        $message = "ERROR: Could not able to execute $insert. " . mysqli_error($connection);
    }
    // close connection
    mysqli_close($connection);
}

?>


<!DOCTYPE html>
<html>
<head>
<title>Admin</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: #666;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 20%;
  height: 4000px; /* only for demonstration, should be removed */
  background: #ccc;
  padding: 20px;
}


article {
  float: left;
  padding: 20px;
  width: 80%;
  background-color: #f1f1f1;
  height: 4000px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section::after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
}


}
</style>
</head>
<body>

<header>
  <link rel="stylesheet" type="text/css" href="http://localhost/SD/css/style.css"> 
		<h20>BOOKSHOP</h20>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<div class="topnav">
			<ul class="first-ul">
			<li style="float:right">
			<div class="dropdown">
    			<a href="http://localhost/sd/admin/adminlogout.php">Logout </a>
		     </div>
			</div>
  			<a></a>
			<a></a>
			</li>
			</ul>
		</div>
</header>

<section>
  <nav>
    <div class="w3-container w3-display-container w3-padding-16">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
  </div>
  <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
    <a href="http://localhost/sd/Application%20Layer/Manage%20Registration/admindetails.php" class="w3-bar-item w3-button">AdminList</a><br><br>
	 <a href="http://localhost/sd/Application%20Layer/Manage%20Registration/customerdetails.php" class="w3-bar-item w3-button">UserList</a><br><br>
    <a href="http://localhost/sd/Application%20Layer/Manage%20Report/adminreportview.php" class="w3-bar-item w3-button ">Report</a><br><br>
    <a href="http://localhost/sd/Application%20Layer/Manage%20Delivery/adminorderview.php" class="w3-bar-item w3-button">Transactions</a><br><br>
    <a href="http://localhost/sd/Application%20Layer/Manage%20Stock/booklist.php" class="w3-bar-item w3-button">Stock</a><br><br>
  </div>
  </nav>
  
 <article>
  
     <div class="container-fluid h-100 bg-light text-dark">
		  <div >
            <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-3">
			<a href="http://localhost/sd/Application%20Layer/Manage%20Stock/addstock.php">Add Books</a>
		  <table id="tableHorizontalWrapper" class="table table-striped table-bordered table-sm text-center" cellspacing="0"width="100%">
				<thead>
                    <tr>
                        <th>Book Name</th>
                        <th>Category</th>
                        <th>Description</th>
						<th>Page Number</th>
						<th>Author</th>
                        <th>Isbn</th>
                        <th>Price</th>
						<th>Image</th>
						<th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                while($row = mysqli_fetch_array($retrive))
                {
                    ?>
                    <tr>
                    <td><?= $row['name'];?></td>
                    <td><?= $row['category'];?></td>
				          	<td><?= $row['description'];?></td>
                    <td><?= $row['page'];?></td>
				            	<td><?= $row['edition'];?></td>
                    <td><?= $row['isbn'];?></td>
					            <td><?= $row['price'];?></td>
                    <td><?php echo '<img src="data:image;base64, '.base64_encode($row['img']).'" alt= "Image" style="width: 150px; height: 150px;">'; ?></td>
					          <td><a href="http://localhost/sd/Business%20Service%20Layer/Manage%20Stock/delete.php?id=<?php echo $row["id"]; ?>">Delete</td>
                    </tr>
                <?php
                }
            
                ?>
                </tbody>
            </table>
         </div>
		  </div>
		   </div>
  
  
    
  </article>
</section>

<footer>
  <p></p>
</footer>

</body>
</html>