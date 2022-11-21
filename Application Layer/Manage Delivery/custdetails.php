<?php
$connection = mysqli_connect("127.0.0.1","root","","sdd");

if(!$connection)
{
	echo "Database connection faild...";
}

    $cid = $_GET['cid'];
    $cprice = $_GET['cprice'];
   

    // insert data to database
    $insert = "INSERT INTO carts (cid,cprice) VALUES ('$cid','$cprice')";
    $result = mysqli_query($connection, $insert);




?>



<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="http://localhost/SD/css/style.css"> 
	<link rel="stylesheet" type="text/css" href="http://localhost/sd/css/book.css">
		<title>ENGLISH</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<style>
input[type=text], select {
  width: 70%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 70%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

</style>
		
		
		
		
		
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
		<h1> Delivery Details </h1>
	</div>
	
	
			

           <h2>Customer Details</h2>
              <form action="http://localhost/sd/Business%20Service%20Layer/Manage%20Delivery/deliverydetails.php">
               <label>Full Name</label><br>
                 <input type="text"  name="fname" placeholder="Your name.."><br>
                 <label>Address</label><br>
                 <input type="text" name="address" placeholder="Your address.."><br>
                 <label>State</label><br>
                 <input type="text"name="state" placeholder="Your state.."><br>
                 <label>Poscode</label><br>
                 <input type="text" name="poss" placeholder="Your posscode.."><br>
                 <label>Phone Number</label><br>
                 <input type="text" name="num" placeholder="Your number.."><br>
                 <input type="submit" name="submit" value="submit">
              </form>
   
				
			

		

	
	
</body>
</html>