<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="http://localhost/SD/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/SD/css/style.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/SD/css/book.css">
    <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	
		<title>Registeration</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<div class="topnav">
			<ul class="first-ul"><li>
  			<a href="http://localhost/SD/index.php">Home</a>
			<a href="http://localhost/SD/Application%20Layer/Manage%20Registration/register.php">Register</a>
			</li>
			</ul>
		</div>

	</head>

	<body>
		
	    <div class="body">
			<div id="frmRegistration">
                 <form class="form-horizontal" action="http://localhost/SD/Business%20Service%20Layer/Manage%20Registration/registerdata.php" method="POST">
	                  <h1>User Registration</h1>
	                    <div class="form-group">
                           <label class="control-label col-sm-2" for="firstname">First Name:</label>
                             <div class="col-sm-6">
                               <input type="text" name="firstname" class="form-control" placeholder="Enter Firstname">
                             </div>
                        </div>
                        <div class="form-group">
                           <label class="control-label col-sm-2" for="lastname">Last Name:</label>
                            <div class="col-sm-6">
                              <input type="text" name="lastname" class="form-control"  placeholder="Enter Lastname">
                            </div>
                        </div>
                        <div class="form-group">
                           <label class="control-label col-sm-2" for="lastname">Gender:</label>
                             <div class="col-sm-6">
                              <label class="radio-inline"><input type="radio" name="gender" value="Male">Male</label>
	                          <label class="radio-inline"><input type="radio" name="gender" value="Female">Female</label>
                             </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="email">Email:</label>
                              <div class="col-sm-6">
                                <input type="email" name="email" class="form-control"  placeholder="Enter email">
                              </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="pwd">Password:</label>
                              <div class="col-sm-6"> 
                                <input type="password" name="password" class="form-control" placeholder="Enter password">
                              </div>
                        </div>
                        <div class="form-group"> 
                             <div class="col-sm-offset-2 col-sm-10">
                               <button type="submit" name="create" class="btn btn-primary">Submit</button>
                             </div>
                        </div>
                </form>
             </div>

		</div>
		<div class="footer">
			<br><br><br>
			<center>Copyright © BOOKSHOP 2021 | All Rights Reserved </center> 
		</div>
	</body>
</html>