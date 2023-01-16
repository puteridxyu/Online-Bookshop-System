<?php
$connection = mysqli_connect("127.0.0.1","root","","sdd");

if(!$connection)
{
	echo "Database connection faild...";
}

$option = mysqli_query($connection, "SELECT * FROM books");


$id = $_GET['id'];
$edit = mysqli_query($connection,"SELECT * FROM books WHERE `books`.`id` = $id");
$row= mysqli_fetch_array($edit);




?>


<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="http://localhost/SD/css/style.css"> 
	<link rel="stylesheet" type="text/css" href="http://localhost/sd/css/book.css">
		<title>DETAILS</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<div class="topnav">
			<ul class="first-ul"><li>
  			<a href="http://localhost/sd/bookhome.php">Home</a>
			<div class="dropdown">
				<button class="dropbtn">Catalogue
					<i class="fa fa-caret-down"></i>
				</button>
				<div class="dropdown-content">
					<a href="http://localhost/sd/Application%20Layer/Manage%20Stock/englishbook.php" >English Books</a>
					<a href="http://localhost/sd/Application%20Layer/Manage%20Stock/malaybooks.php">Malay Books</a>
					<a href="http://localhost/sd/Application%20Layer/Manage%20Stock/revision.php">Revision Books</a>
					<a href="http://localhost/sd/Application%20Layer/Manage%20Stock/Stationery.php">Stationery</a>
				</div>
			</div>
			<div class="dropdown">
				<button class="dropbtn">Report
					<i class="fa fa-caret-down"></i>
				</button>
				<div class="dropdown-content">
					<a href="http://localhost/sd/Application%20Layer/Manage%20Report/addreport.php" >File Report</a>
					<a href="http://localhost/sd/Application%20Layer/Manage%20Report/reportview.php">View Report</a>
				</div>
			</div>
			<div class="dropdown">
				<button class="dropbtn">Cart
					<i class="fa fa-caret-down"></i>
				</button>
				<div class="dropdown-content">
					<a href="http://localhost/sd/Application%20Layer/Manage%20Cart/viewcart.php" >View Cart</a>
					<a href="http://localhost/sd/Application%20Layer/Manage%20Delivery/orderlist.php">Order Status</a>
					<a href="http://localhost/sd/Application%20Layer/Manage%20Delivery/custtrack.php">Tracking</a>
				</div>
			</div>
			</li>
			<li style="float:right">
  			<a href="http://localhost/sd/logout.php">Logout</a>
			<a></a>
			</li>
			</ul>
		</div>

	</head>

	<body style="background-color:LightCyan">
	<div class="header">
		<h1> Details </h1>
	</div>
	
	<div class="book-content" style="padding: 50px 170px 100px 170px;">
			
			<div class="row2">
				<div class="column2">
					<p><?php echo '<img src="data:image;base64, '.base64_encode($row['img']).'" alt= "Image" style="width: 250px; height: 300px;">'; ?></p>
				</div>
				<div class="column3">
					<h2 style="color:blue; font-weight:bold; padding-bottom:10px"><?= $row['name'];?></h2>
					<h3 style="font-weight:bold;">Product Details</h3>
					
					<ul class="sec-ul" style="list-style-type: none">
						<li><span style="font-weight:bold">Price:&nbsp;</span><?= $row['price'];?></li>
						<li><span style="font-weight:bold">Description:&nbsp;</span><?= $row['description'];?></li>
						<li style="margin-top:3px"><span style="font-weight:bold">Author:&nbsp;</span><?= $row['edition'];?></li>
						<li><span style="font-weight:bold">ISBN:&nbsp;</span><?= $row['isbn'];?></li>
						<li><span style="font-weight:bold">Page count:&nbsp;</span><?= $row['page'];?></li>
					</ul>
					<div class="card">
						<a class="cartbtn" href="http://localhost/sd/Business%20Service%20Layer/Manage%20Cart/process_cart.php?name=<?php echo $row["name"];?> &category=<?php echo $row["category"]; ?>&price=<?php echo $row["price"]; ?>"> Add to Cart </a></p>
					</div>
				</div>
				</div>
	</div>
	
</body>
</html>