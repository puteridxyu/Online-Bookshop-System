<?php 
session_start();
$servername =   '127.0.0.1';
$username   =   'root';
$password   =   '';
$dbname     =   'sdd';
$connection =   mysqli_connect($servername, $username, $password,"$dbname");
if(!$connection)
{
    die('Could not connect My Sql:' .mysql_error());
}

?>


<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="http://localhost/SD/css/style.css"> 
	<link rel="stylesheet" type="text/css" href="http://localhost/sd/css/book.css">
		<title>STATIONERY</title>
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

<<body style="background-color:LightCyan">
	<div class="header">
		<h1> Viewcart </h1>
	</div>
	
	<div class="body">
	
	        
			 <div id="page">
					<!-- start content -->
					<div id="content">
						<div class="post">
							<h1 class="title">Viewcart</h1>
							<div class="entry">
						
							<pre><?php
							//	print_r($_SESSION);
							?></pre>
						
							<form action="http://localhost/sd/Business%20Service%20Layer/Manage%20Cart/process_cart.php" method="POST">
							<table width="100%" border="0">
								<tr >
									<td><b>No</b></td> 
									<td><b>Category</b></td> 
									<td><b>Product</b></td> 
									<td><b>Qty</b></td> 
									<td><b>Rate</b></td> 
									<td><b>Price(RM)</b></td> 
									<td><b>Delete</b></td> 
								</tr>
								<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
							
								<?php
									$tot = 0;
									$i = 1;
									if(isset($_SESSION['cart']))
									{

									foreach($_SESSION['cart'] as $name=>$x)
									{	
										echo '
											<tr>
											<Td> '.$i.'
											<td> '.$x['category'].'
											<td> '.$x['name'].'
											<td> <input type="text" size="2" value="'.$x['qty'].'" name="'.$name.'">
											<td> '.$x['price'].'
											<td> '.($x['qty']*$x['price']).'
											<td> <a href="http://localhost/sd/Business%20Service%20Layer/Manage%20Cart/process_cart.php?id='.$name.'">Delete</a>
										</tr>
										';
										
										$tot = $tot + ($x['qty']*$x['price']);
										$i++;
										$e = rand(200,700);
									}
									}
								
								?>
							<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
								
							<tr>
							<td colspan="6" align="right">
							<h4>Total:RM</h4>
							
							</td>
							<td> <h4><?php echo $tot; ?> </h4></td>
							</tr>
							<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
							
							<Br>
								</table>						

								<br><br>
							<center>
							<input type="submit" value=" Re-Calculate " > 
							</form>
							<form action="http://localhost/sd/Application%20Layer/Manage%20Delivery/custdetails.php">
                           <input type="hidden"  name="cid" value="<?php echo "$e" ?>" ><br>
				           <input type="hidden"  name="cprice" value="<?php echo "$tot" ?>" ><br>
                            <input type="submit" name="submit" value="CONFIRM & PROCEED">
                            </form>
							</center>
							</div>
							
						</div>
						
					</div>
	
	</div>
	
	
</body>
</html>