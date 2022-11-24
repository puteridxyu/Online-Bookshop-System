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
    <div class="main">
    <!-- Admin Form -->
    <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="http://localhost/SD/images/signin-image.jpg" alt="sing up image"></figure>
                    </div>
                    <div class="signin-form">
                        <h2 class="form-title">Admin Sign In</h2>
                        <form class="form-horizontal" method="POST" action="http://localhost/sd/admin/adminlog.php">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="aemail" id="aemail" placeholder="Your Email Address"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="apass" id="apass" placeholder="Password"/>
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