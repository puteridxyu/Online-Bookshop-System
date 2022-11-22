<?php
require_once 'file:///C:/xampp/htdocs/SD/config.php';
$retrive = mysqli_query($connection, "SELECT * FROM admin");
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

  <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://localhost/sd/css/table.css">
  <style>
*   {
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
		  <div >
        <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-3">
			    <a href="http://localhost/sd/Application%20Layer/Manage%20Registration/addadmin.php">ADD ADMIN</a>
		      <table id="tableHorizontalWrapper" class="table table-striped table-bordered table-sm text-center" cellspacing="0"width="100%">
				    <thead>
              <tr>
                <th>Name</th>
                <th>Email</th>
                 <th>Password</th>
              </tr>
            </thead>

            <tbody>

            </tbody>
            </table>

         </div>
		  </div>
	  </div> -->

    <div class="container">

			<div class="row justify-content-center">
				<div class="col-md-10 text-center mb-5 col-">
					<h2 class="heading-section">Admin List</h2>
				</div>
        <div class="col-md-2">
          <a href="http://localhost/sd/Application%20Layer/Manage%20Registration/addadmin.php">
            <input type="submit" name="addNew" id="addNew" class="form-submit" value="Add New Admin"/>
          </a>
        </div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table table-bordered table-dark table-hover">
						  <thead>
						    <tr>
						      <th>Name</th>
						      <th>Email</th>
						      <th>Password</th>
						    </tr>
						  </thead>
						  <tbody>
              <?php
                while($row = mysqli_fetch_array($retrive))
                {
                  ?>
                  <tr>
                  <td><?= $row['aname'];?></td>
                  <td><?= $row['aemail'];?></td>
					        <td><?= $row['apass'];?></td>
					        </tr>
                <?php
                }
                ?>
						    
						  </tbody>
              
						</table>

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