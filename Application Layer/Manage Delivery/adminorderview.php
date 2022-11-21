<?php 
session_start();
$connection = mysqli_connect("127.0.0.1","root","","sdd");

if(!$connection)
{
	echo "Database connection faild...";
}

$retrive = mysqli_query($connection, "SELECT * FROM delivery INNER JOIN payment ON delivery.id = payment.id  INNER JOIN tracking ON delivery.id=tracking.id");
$row= mysqli_fetch_array($retrive);

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
  height: 1000px; /* only for demonstration, should be removed */
  background: #ccc;
  padding: 20px;
}


article {
  float: left;
  padding: 20px;
  width: 80%;
  background-color: #f1f1f1;
  height: 1000px; /* only for demonstration, should be removed */
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
		  <div id="page">
					<!-- start content -->
					<div id="content">
						<div class="post">
							<h1 class="title">Transactions</h1>
							<div class="entry">
					
							<table width="100%" border="0">
								<tr > 
                  <td><b>ID</b></td> 
									<td><b>Full Name</b></td> 
									<td><b>Phone Number</b></td> 
									<td><b>Bank Name</b></td> 
									<td><b>Price(RM)</b></td> 
									<td><b>Tracking ID</b></td> 
									<td><b>Status</b></td> 
									<td><b>Action</b></td> 
								</tr>
								<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
							
							     
								  <?php
                while($row = mysqli_fetch_array($retrive))
                {
                    ?>
                    <tr>
                    <td><?= $row['id'];?></td>
                    <td><?= $row['fname'];?></td>
                    <td><?= $row['num'];?></td>
					<td><?= $row['bname'];?></td>
                    <td><?= $row['cash'];?></td>
					<td><?= $row['tid'];?></td>
					<td><?= $row['tsta'];?></td>
					<td><a href="http://localhost/sd/Application%20Layer/Manage%20Delivery/editorderlist.php?id=<?php echo $row["fname"]; ?>  ">Edit</a></td>
                    </tr>
                <?php
                }
            
                ?>
							
							
							
							
							
							</div>
							
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