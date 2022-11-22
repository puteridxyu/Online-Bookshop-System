<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Font Icon -->
        <link rel="stylesheet" href="http://localhost/SD/css/material-design-iconic-font.css">
        <link rel="stylesheet" href="http://localhost/SD/css/material-design-iconic-font.min.css">

        <!-- Main css -->
        <link rel="stylesheet" href="http://localhost/SD/css/register.css">


		<link rel="stylesheet" type="text/css" href="http://localhost/SD/css/style.css">
    	<link rel="stylesheet" type="text/css" href="http://localhost/SD/css/style.css">
    	<link rel="stylesheet" type="text/css" href="http://localhost/SD/css/book.css">

		<title>Login</title>
		
		<div class="topnav">
			<ul class="first-ul"><li>
  			<a href="http://localhost/SD/index.php">Home</a>
			<a href="http://localhost/SD/Application%20Layer/Manage%20Registration/register.php">Register</a>
			<div class="dropdown">
				<button class="dropbtn">Catalogue
					<i class="fa fa-caret-down"></i>
				</button>
				<div class="dropdown-content">
					<a onclick="alert('Please log in your account to continue the activity')" >English Books</a>
					<a onclick="alert('Please log in your account to continue the activity')">Malay Books</a>
					<a onclick="alert('Please log in your account to continue the activity')">Revision Books</a>
					<a onclick="alert('Please log in your account to continue the activity')">Stationery</a>
				</div>
			</div>
			</li>
			<li style="float:right">
  			<a></a>
			<a></a>
			</li>
			</ul>
		</div>
	</head>

	<body>		

	    <!-- <div class="body">
			<div id="frmRegistration">
                <form class="form-horizontal" method="POST" action="http://localhost/sd/admin/log.php">
	                <h1>Customer Login</h1>
                     <div class="form-group">
                       <label class="control-label col-sm-2" for="email">Email:</label>
                        <div class="col-sm-6">
                         <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                        </div>
                     </div>
                     <div class="form-group">
                      <label class="control-label col-sm-2" for="pwd">Password:</label>
                        <div class="col-sm-6"> 
                          <input type="password" class="form-control" name="password" id="pwd" placeholder="Enter password">
                        </div>
                     </div>
                     <div class="form-group"> 
                       <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" name="login" class="btn btn-primary">Login</button>
                       </div>
                     </div>
                </form>
            </div>
		</div> -->

	<div class="main">

    <!-- Customer Login Form -->
    <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="http://localhost/SD/images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="http://localhost/SD/Application%20Layer/Manage%20Registration/register.php" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign In</h2>
                        <form class="form-horizontal" method="POST" action="http://localhost/sd/admin/log.php">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email Address"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="pwd" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="login" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
	</body>
</html>