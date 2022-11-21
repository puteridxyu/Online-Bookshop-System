<?php
$connection = mysqli_connect("127.0.0.1","root","","sdd");

if(!$connection)
{
	echo "Database connection faild...";
}

$retrive = mysqli_query($connection, "SELECT * FROM books where category = 'Malay books'");
$row= mysqli_fetch_array($retrive);



?>



<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="http://localhost/SD/css/style.css"> 
	<link rel="stylesheet" type="text/css" href="http://localhost/sd/css/book.css">
		<title>MALAY</title>
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
		<h1> MALAY BOOKS </h1>
	</div>
	
	<div class="body">
	
	        
			 <?php
                while($row = mysqli_fetch_array($retrive))
                {
                    ?>
                    <div class="row1">
				<div class="column1">
					<div class="card">
					<td><?php echo '<img src="data:image;base64, '.base64_encode($row['img']).'" alt= "Image" style="width: 100px; height: 100px;">'; ?></td>
					<div class="card-body">
						<h2 class="book-name" ><?= $row['name'];?></h2>
						<span>
							<p class="para"><span style="color:blue" > RM<?= $row['price'];?><br><br>
					    <a class="cartbtn" href="http://localhost/sd/Business%20Service%20Layer/Manage%20Cart/process_cart.php?name=<?php echo $row["name"];?> &category=<?php echo $row["category"]; ?>&price=<?php echo $row["price"]; ?>"> Add to Cart </a></p>
					    <a class="details" href="http://localhost/sd/Application%20Layer/Manage%20Stock/bookdetails.php?id=<?php echo $row["id"]; ?>"> Details </a></p>
						</span>
					</div>
				</div>
			</div>
				
			</div>
                <?php
                }
            
                ?>
	
	</div>
	
	
</body>
</html>