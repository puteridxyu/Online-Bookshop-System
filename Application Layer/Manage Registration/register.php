<!DOCTYPE html>
<html>
	<head>
    <title>Registeration</title>
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
    <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
		
		<div class="topnav">
			<ul class="first-ul"><li>
  			<a href="http://localhost/SD/index.php">Home</a>
			<a href="http://localhost/SD/Application%20Layer/Manage%20Registration/register.php">Register</a>
			</li>
			</ul>
		</div>
	</head>

	<body>

    <div class="main">
      <!-- Customer Registration form -->
      <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Customer Sign Up</h2>
                        <form method="POST" class="register-form" id="register-form" action="http://localhost/SD/Business%20Service%20Layer/Manage%20Registration/registerdata.php">
                            <div class="form-group">
                                <label for="firstname"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="firstname"  placeholder="Your First Name"/>
                            </div>
                            <div class="form-group">
                                <label for="lastname"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="lastname"  placeholder="Your Last Name"/>
                            </div>
                              <div class="form-wrapper1">
						                    <select name="gender" id="" class="form-control1"> 
							                    <option value="" disabled selected>Gender</option>
							                    <option value="Male" >Male</option>
							                    <option value="Female">Female</option>
						                    </select>
					                  </div>                            
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email"  placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password"  placeholder="Password"/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup"  class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="http://localhost/SD/images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="http://localhost/sd/admin/login.php" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
		<div class="footer">
			<center>Copyright © BOOKSHOP 2021 | All Rights Reserved </center> 
		</div>
	</body>
</html>