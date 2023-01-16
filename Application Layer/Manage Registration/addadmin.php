<!-- /header -->
<?php include '../../x/layout/head.php'; ?>

<!-- /header -->
<?php include '../../x/layout/adminheaderNsidebar.php'; ?>

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
                                                <h2>Add New Admin</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><a href="admindetails.php">Admin</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Add</span>
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
                                            <div class="all-form-element-inner" >
                                                <form action='http://localhost/sd/Business%20Service%20Layer/Manage%20Registration/addadmindata.php' method='POST' enctype= "multipart/form-data">
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Full Name</label>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-9 col-xs-12">
                                                                <input type="text" name='aname' id="full-name" class="form-control" placeholder="Enter your name" required/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Email</label>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-9 col-xs-12">
                                                                <input type="email" name='aemail' id="your-email" class="form-control" placeholder="Enter your email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="sparkline11-graph">
                                                        <div id="pwd-container2" class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 form-group head-strong-password">
                                                                <label class="login2 pull-right pull-right-pro" for="password2">Password</label>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 form-group head-strong-password">
                                                                <input type="password" name='apass' id="password" class="form-control example2" id="password2"  value="">
                                                            </div>
                                                            <br>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 form-group mg-b-pass">
                                                                <div class="pwstrength_viewport_verdict text-strong-password"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group-inner">
                                                        <div class="login-btn-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3"></div>
                                                                <div class="col-lg-9">
                                                                    <div class="login-horizental cancel-wp pull-left form-bc-ele">
                                                                        <button class="btn btn-white" href="#">Cancel</button>
                                                                        <button class="btn btn-sm btn-primary login-submit-cs" name='submit' value="Add" type="submit">Submit</button>
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