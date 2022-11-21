<?php 
session_start();
$connection = mysqli_connect("127.0.0.1","root","","sdd");

if(!$connection)
{
	echo "Database connection faild...";
}

$retrive = mysqli_query($connection, "SELECT * FROM report ");
$row= mysqli_fetch_array($retrive);

?>


<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="http://localhost/SD/css/style.css"> 
	<link rel="stylesheet" type="text/css" href="http://localhost/sd/css/book.css">
		<title>ENGLISH</title>
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
		<h1> ReportList </h1>
	</div>
	
	<div class="body">
	
	        
			 <div id="page">
					<!-- start content -->
					<div id="content">
						<div class="post">
							<h1 class="title">ReportList</h1>
							<div class="entry">
					
						
							<table width="100%" border="0">
								<tr > 
									<td><b>Full Name</b></td> 
									<td><b>Email</b></td> 
									<td><b>Description</b></td> 
									<td><b>Status</b></td> 
								</tr>
								<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
							
							     
								  <?php
                while($row = mysqli_fetch_array($retrive))
                {
                    ?>
                    <tr>
                    <td><?= $row['rname'];?></td>
                    <td><?= $row['remail'];?></td>
					<td><?= $row['rdesc'];?></td>
                    <td><?= $row['rsta'];?></td>
                    </tr>
                <?php
                }
            
                ?>
							
							
							
							
							
							</div>
							
						</div>
						
					</div>
	
	</div>
	
	
</body>
</html>