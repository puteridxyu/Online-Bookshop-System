<?php
$connection = mysqli_connect("127.0.0.1","root","","sdd");

if(!$connection)
{
	echo "Database connection fail...";
}


?>
<!-- /header -->
<?php include '../../x/layout/head.php'; ?>

<!-- /header -->
<?php include '../../x/layout/headerNsidebar.php'; ?>

            <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            <div class="breadcome-heading">
                                                <h2>Make A Report</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="../../bookhome.php">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><a href="reportview.php">Report</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Make Report</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Password meter Start -->
        <div class="password-meter-area mg-b-15">
            <div class="container-fluid">
            <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline12-list">
                            <div class="sparkline12-hd">
                                <div class="main-sparkline12-hd">
                                    <h1> </h1>
                                </div>
                            </div>
                            <div class="sparkline12-graph">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="all-form-element-inner">
                                                <form action="../../Business Service Layer/Manage Report/reportadd.php" method="POST">
                                                <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Date & Time (YYYY-MM-DD HH:MI:SS)</label>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-9 col-xs-12">
                                                                <input name="rdate" type="text" class="form-control" placeholder="Enter the date and time of report" required/>
                                                            </div>
                                                        </div>
                                                    </div>    
                                                <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Full Name</label>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-9 col-xs-12">
                                                                <input name="rname" type="text" class="form-control" placeholder="Enter your name" required/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Email</label>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-9 col-xs-12">
                                                                <input name="remail" type="email" class="form-control" placeholder="Enter your email" required/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Report Details</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-6 col-sm-9 col-xs-12" >
                                                                <input name="rdesc" type="text" style="height: 100px;"class="form-control" placeholder="Enter your report details" required/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row"> 
                                                            <input type="hidden" name="rsta" class="form-control" value="In investigation">
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="login-btn-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3"></div>
                                                                <div class="col-lg-9">
                                                                    <div class="login-horizental cancel-wp pull-left form-bc-ele">
                                                                        <button class="btn btn-white"><a href="reportview.php" style="color: black;">Cancel</a></button>
                                                                        <button class="btn btn-sm btn-primary login-submit-cs" name="submit" type="submit">Submit</button>
                                                                    </div>
                                                                </div>
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
        </div>
        
        
<!-- /header -->
<?php include '../../x/layout/footer.php'; ?>