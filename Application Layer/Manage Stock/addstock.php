<?php
$connection = mysqli_connect("127.0.0.1","root","","sdd");

if(!$connection)
{
	echo "Database connection faild...";
}
$select =   "SELECT * FROM `books`";
$retrive = mysqli_query($connection, "SELECT * FROM books");
$option = mysqli_query($connection, "SELECT * FROM cat");


$message    =   '';
if(isset($_POST['submit']))
{
    $name       = $_POST['name'];
    $category    =   $_POST['category'];
	$description       = $_POST['description'];
    $page   =   $_POST['page'];
	$edition       = $_POST['edition'];
    $isbn    =   $_POST['isbn'];
	$price       = $_POST['price'];
    $img    =   $_POST['img'];

    // insert data to database
    $insert = "INSERT INTO books (name, category, description, page, edition, isbn, price, img) VALUES ('$name', '$category','$description', '$page','$edition', '$isbn','$price', '$img')";
    if(mysqli_query($connection, $insert))
    {
        $message =  "Records added successfully.";
    } 
    else
    {
        $message = "ERROR: Could not able to execute $insert. " . mysqli_error($connection);
    }
    // close connection
    mysqli_close($connection);
}

?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>OBS</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="../../x/img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="../../x/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="../../x/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="../../x/css/owl.carousel.css">
    <link rel="stylesheet" href="../../x/css/owl.theme.css">
    <link rel="stylesheet" href="../../x/css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="../../x/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="../../x/css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="../../x/css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="../../x/css/main.css">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="../../x/css/form/all-type-forms.css">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="../../x/css/educate-custon-icon.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="../../x/css/morrisjs/morris.css">
    <!-- dropzone CSS
		============================================ -->
    <link rel="stylesheet" href="../../x/css/dropzone/dropzone.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="../../x/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="../../x/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="../../x/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="../../x/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="../../x/css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="../../x/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="../../x/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="../../x/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<!-- /header -->
<?php include '../../x/layout/adminheaderNsidebar.php'; ?>

            <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            <h2>Add Stock</h2>
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="btn-group btn-custom-groups" style="float: right;">
                                          <a type="button" title="back" style=""class="btn btn-default" href="../../Application Layer/Manage Stock/booklist.php"><i class="fa fa-times" aria-hidden="true">&nbsp;</i> Back</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">&nbsp;&nbsp;&nbsp;&nbsp;New </a></li>
                                <li><a href="#reviews"> &nbsp;&nbsp;&nbsp;Upload file</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit" >
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row" >
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div  class="" >
                                                    <form action='http://localhost/sd/Business%20Service%20Layer/Manage%20Stock/add.php' method='POST' enctype= "multipart/form-data"  id="demo1-upload">
                                                        <div class="row" >
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            
                                                                <div class="form-group " >

                                                                    <div class="form-control" style="text-align: center; min-height: 150px; border: 2px dashed #CCCCCC;
                                                                                background: white;padding: 20px 20px; cursor: pointer; " >

                                                                        <i style="color: #999999; font-size: 30px;" class="fa fa-download" aria-hidden="true" ></i>
                                                                        <h2 style="font-size:17px; color: #999999; ">
                                                                            Drop image here or click to upload.
                                                                        </h2><br>

                                                                        <h2 style="font-size:17px; color: #999999; margin-left: 75px; font-weight: normal;" >
                                                                            <div style="display: flex; align-items: center; justify-content: center;">
                                                                            <input type='file' name='img' id='img' id="image-upload" style="border: none; font-weight: lighter; font-size: 10px;" required/> </div>
                                                                        </h2>
                                                                   </div>
                                                                    
                                                                </div>

                                                                <div class="form-group">
                                                                    <input type='text' name='name' class="form-control" placeholder="Item Name" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type='text' name='edition' class="form-control" placeholder="Author / Brand" >
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type='float' name='price' pattern="^[0-9]+(\.[0-9]+)?$" class="form-control" placeholder="Price" required>
                                                                </div>
                                                                
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                                            
                                                                <div class="form-group">
                                                                    <input type='number' name='page'  pattern="^[0-9]+)?$" class="form-control" placeholder="Page Number" >
                                                                </div>
                                                              
                                                                <div class="form-group">
                                                                    <input type='text' name='isbn' class="form-control" placeholder="ISBN" >
                                                                </div>
                                                                
                                                                <div class="form-group">
                                                                    <select name="category" class="form-control" required>
                                                                      <option >Select Category</option>
                                                                      
                                                                      <?php foreach($option as $key => $value){ ?>
                                                                      <option value="<?=$value['category'] ;?>"><?=$value['category'] ;?></option>
                                                                      <?php } ?>

                                                                    </select>
                                                                </div>
                                                                <div class="form-group res-mg-t-15">
                                                                    <textarea style="height: 170px;" name='description'  placeholder="Description" required></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="payment-adress">
                                                                    <input type="submit" name='submit' value='Submit'  class="btn btn-primary waves-effect waves-light">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-tab-list tab-pane fade" id="reviews">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                            

                                            <div  class="pro-ad">
                                                    <form >
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                
                                                                    <div class="form-control" style="text-align: center; min-height: 150px; border: 2px dashed #CCCCCC;
                                                                                background: white;padding: 20px 20px; cursor: pointer; " >
                                                                                <br><br>
                                                                        <i style="color: #999999; font-size: 30px;" class="fa fa-download" aria-hidden="true" ></i>
                                                                        <h2 style="font-size:17px; color: #999999; ">
                                                                            Drop excel file here or click to upload.
                                                                        </h2>
                                                                        
                                                                        <h2 style="font-size:17px; color: #999999; margin-left: 75px; font-weight: normal;" >
                                                                        </h2> <br><br><br>
                                                                        
                                                                   </div>
                                                            </div>
                                                            
                                                            
                                                                                                                  </div>
                                                        <div class="row">
                                                            <div class="col-lg-12"><br>
                                                                <div class="payment-adress">
                                                                    <button href="#" class="btn btn-primary waves-effect waves-light" disable>Submit</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>


                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright-area" style="margin-top: 100px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2018. All rights reserved. Template by <a href="https://colorlib.com/wp/templates/">Colorlib</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jquery
		============================================ -->
    <script src="../../x/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="../../x/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="../../x/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="../../x/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="../../x/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="../../x/js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="../../x/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="../../x/js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="../../x/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../../x/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="../../x/js/metisMenu/metisMenu.min.js"></script>
    <script src="../../x/js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="../../x/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="../../x/js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="../../x/js/calendar/moment.min.js"></script>
    <script src="../../x/js/calendar/fullcalendar.min.js"></script>
    <script src="../../x/js/calendar/fullcalendar-active.js"></script>
    <!-- maskedinput JS
		============================================ -->
    <script src="../../x/js/jquery.maskedinput.min.js"></script>
    <script src="../../x/js/masking-active.js"></script>
    <!-- datepicker JS
		============================================ -->
    <script src="../../x/js/datepicker/jquery-ui.min.js"></script>
    <script src="../../x/js/datepicker/datepicker-active.js"></script>
    <!-- form validate JS
		============================================ -->
    <script src="../../x/js/form-validation/jquery.form.min.js"></script>
    <script src="../../x/js/form-validation/jquery.validate.min.js"></script>
    <script src="../../x/js/form-validation/form-active.js"></script>
    <!-- dropzone JS
		============================================ -->
    <script src="../../x/js/dropzone/dropzone.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="../../x/js/tab.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="../../x/js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="../../x/js/main.js"></script>
</body>

</html>
