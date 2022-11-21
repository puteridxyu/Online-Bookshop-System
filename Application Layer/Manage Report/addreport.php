<?php
$connection = mysqli_connect("127.0.0.1","root","","sdd");

if(!$connection)
{
	echo "Database connection faild...";
}


?>



<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="http://localhost/SD/css/style.css"> 
	<link rel="stylesheet" type="text/css" href="http://localhost/sd/css/book.css">
		<title>Report</title>
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
		<h1> Report Details </h1>
	</div>
	
	
			

        <div class="body">
			<div id="frmRegistration">
                 <form class="form-horizontal" action="http://localhost/sd/Business%20Service%20Layer/Manage%20Report/reportadd.php" method="POST">
	                  <h1>Report </h1>
	                    <div class="form-group">
                           <label class="control-label col-sm-2" for="firstname">Full Name:</label>
                             <div class="col-sm-6">
                               <input type="text" name="rname" class="form-control" placeholder="Enter Fullname">
                             </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="email">Email:</label>
                              <div class="col-sm-6">
                                <input type="text" name="remail" class="form-control"  placeholder="Enter email">
                              </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="pwd">Description:</label>
                              <div class="col-sm-6"> 
                                <input type="text" name="rdesc" class="form-control" placeholder="Enter description">
                              </div>
                        </div>
						<div class="form-group">
                              <div class="col-sm-6"> 
                                <input type="hidden" name="rsta" class="form-control" value="In investigation">
                              </div>
                        </div>
                        <div class="form-group"> 
                             <div class="col-sm-offset-2 col-sm-10">
                               <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                             </div>
                        </div>
                </form>
             </div>

		</div>
   
				
			

		

	
	
</body>
</html>