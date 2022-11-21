<?php
$connection = mysqli_connect("127.0.0.1","root","","sdd");

if(!$connection)
{
	echo "Database connection faild...";
}

$option = mysqli_query($connection, "SELECT * FROM payment");



$edit = mysqli_query($connection,"SELECT * FROM payment WHERE `payment`.`paymentid` = id");




?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="http://localhost/SD/css/style.css"> 
	<link rel="stylesheet" type="text/css" href="http://localhost/sd/css/book.css">
		<title>Payment</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<style>
.c {
  background-color: lightgrey;
  width: 300px;
  border: 5px solid blue;
  padding: 50px;
  margin: 20px;
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
	
	
			

         <center><div  class = "c">
		 
		 <h1>Your Payment Success</h1>
		 <p>
		 <?php
		 $a = rand(100,400);
         $b = rand(300,700);
         echo "Your Tracking Id is $a$b";
		 ?>
		 <br><br>
		 <?php
		 $d = rand(200,700);
		 echo "Your Payment Id is $d";
		 ?>
		 <br><br>
		 <?php
		 $date1=date_create("2021-06-6");
         date_add($date1,date_interval_create_from_date_string("10 days"));
		 ;
		 ?>
		 </p>
		 
              <form action="http://localhost/sd/Business%20Service%20Layer/Manage%20Delivery/trackingdetails.php">
                 <input type="hidden"  name="pid" value="<?php echo "$d" ?>" ><br>
				 <input type="hidden"  name="tid" value="<?php echo "$a$b" ?>" ><br>
				 <input type="hidden"  name="tdate" value="<?php echo  date("d/m/y") ; ?>" ><br>
				 <input type="hidden"  name="rdate" value="<?php echo  date_format($date1,"d/m/Y") ; ?>" ><br>
				 <input type="hidden"  name="tsta" value="Progress" ><br>
                 <input type="submit" name="submit" value="Continue">
              </form>
		 
		 
		 
		 </div></center>
				
			

		

	
	
</body>