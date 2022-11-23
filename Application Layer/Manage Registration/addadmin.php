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
  <!-- Font-->
	<link rel="stylesheet" type="text/css" href="http://localhost/sd/css/roboto-font.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="http://localhost/sd/css/addNewAdmin.css"/>

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
  height: 600px; /* only for demonstration, should be removed */
  background: #ccc;
  padding: 20px;
}


article {
  float: left;
  padding: 20px;
  width: 80%;
  background-color: #f1f1f1;
  height: 600px; /* only for demonstration, should be removed */
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
  
     <!-- <div class="container-fluid h-100 bg-light text-dark">
		    <div class="row justify-content-center align-items-center h-100">
            <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-3">
		          <form action='http://localhost/sd/Business%20Service%20Layer/Manage%20Registration/addadmindata.php' method='POST' enctype= "multipart/form-data">
				
						<b>Name:</b><br>
						<input type='text' name='aname' size='40'>
						<br><br>
						
						<b>Email:</b><br>
						<input type='text' name='aemail' size='40'>
						<br><br>
						
						<b>Password:</b><br>
						<input type='text' name='apass' size='40'>
						<br><br>
						
						<input  type='submit'  name='submit' value='   ADD   '  >
				</form>
            </div>
		    </div>
		   </div> -->
  
       <div class="page-content">
		<div class="form-v5-content">
			<form class="form-detail" action='http://localhost/sd/Business%20Service%20Layer/Manage%20Registration/addadmindata.php' method='POST' enctype= "multipart/form-data">
				<h2>Add New Admin</h2>
				<div class="form-row">
					<label for="full-name">Full Name</label>
					<input type="text"  name='aname' id="full-name" class="input-text" placeholder="Your Name" required>
				</div>
				<div class="form-row">
					<label for="your-email">Your Email</label>
					<input type="text" name='aemail' id="your-email" class="input-text" placeholder="Your Email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
				</div>
				<div class="form-row">
					<label for="password">Password</label>
					<input type="password" name='apass' id="password" class="input-text" placeholder="Your Password" required>
				</div>
				<div class="form-row-last">
					<input type="submit" name='submit' class="register" value="Add">
				</div>
			</form>
		</div>
	</div>  
    
  </article>
</section>

<footer>
  <p></p>
</footer>

</body>
</html>