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
		<h1> Tracking Details </h1>
	</div>
	
	
			

    
         <div class="container">
   <div class="row">
   <div class="col-md-8 col-md-offset-2" style="margin-top: 5%;">
   <div class="row">
   <form action="" method="POST"> 
     <div class="col-md-6">
        Tracking Id:<input type="text" name="tid" class='form-control' > 
        <br> <br>
		<input type="submit" name="search"  value ="Submit">
		<input type="submit" name="search1"  value ="Clear">
	 </div>

   <br> 
   <br>
</div>

							<table width="100%" border="0">
								<tr > 
									<td><b>Tracking ID</b></td> 
									<td><b>Payment ID</b></td> 
									<td><b>Order Date</b></td> 
									<td><b>Received Date</b></td> 
									<td><b>Status</b></td>  
								</tr>
								<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
							
<?php 

     $connection = new mysqli('127.0.0.1', 'root', '', 'sdd');
	 
	 
     if(isset($_POST['search']))
	 {
		 
	 $tid = $_POST['tid'];
     $query = "SELECT * FROM tracking WHERE tid = '$tid'";
	 $query_run = mysqli_query($connection,$query);
	 
	    while($row = mysqli_fetch_array($query_run)) 
	   {?>
		     <td><?php echo $row['tid'] ?></td>
             <td><?php echo $row['pid'] ?></td>
	         <td><?php echo $row['tdate'] ?></td>
             <td><?php echo $row['rdate'] ?></td>
             <td><?php echo $row['tsta'] ?></td>
		   
		 <?php  
	   }
	 
	 
     }
?>
</table>
</div>
</div>
</div>
</body>
</html>