<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="http://localhost/SD/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/SD/css/style.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/SD/css/book.css">
    <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	
		<title>Admin Login</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<div class="topnav">
			<ul class="first-ul"><li>
  			<a href="http://localhost/SD/index.php">Home</a>
			</li>
			</ul>
		</div>

	</head>

	<body>
		
	    <div class="body">
			
			
			<div id="frmRegistration">
                <form class="form-horizontal" method="POST" action="http://localhost/sd/admin/adminlog.php">
	                <h1>Admin Login</h1>
	
                     <div class="form-group">
                       <label class="control-label col-sm-2" for="email">Email:</label>
                        <div class="col-sm-6">
                         <input type="email" class="form-control" name="aemail" id="aemail" placeholder="Enter email">
                        </div>
                     </div>
                     <div class="form-group">
                      <label class="control-label col-sm-2" for="pwd">Password:</label>
                        <div class="col-sm-6"> 
                          <input type="password" class="form-control" name="apass" id="apass" placeholder="Enter password">
                        </div>
                     </div>
                     <div class="form-group"> 
                       <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" name="login" class="btn btn-primary">Login</button>
                       </div>
                     </div>
                </form>
            </div>
			
		</div>
	</body>
</html>