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

		<title>Admin Login</title>

		<div class="topnav">
			<ul class="first-ul"><li>
  			<a href="http://localhost/SD/index.php">Home</a>
			</li>
			</ul>
		</div>
	</head>

	<body>

	    <!-- <div class="body">
			<div id="frmRegistration">
                <form class="form-horizontal" method="POST" action="http://localhost/sd/admin/adminlog.php">
	                <h1>111Admin Login</h1>
	
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
		</div> -->

    <div class="main">

    <!-- Admin Form -->
    <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="http://localhost/SD/images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="#" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Admin Login</h2>
                        <form class="form-horizontal" method="POST" action="http://localhost/sd/admin/adminlog.php">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="email" name="aemail" id="aemail" placeholder="Your Email Address"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="apass" id="apass" placeholder="Password"/>
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

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript" src="js/jquery-3.3.1.js"></script>

	</body>
</html>