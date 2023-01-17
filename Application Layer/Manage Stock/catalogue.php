

<!-- /header -->
<?php include '../../x/layout/head.php'; ?>

<!-- /header -->
<?php include '../../x/layout/headerNsidebar.php'; ?>

            <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            <h2>Catalogue</h2>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Catalogue</span>
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
        <!-- tabs start-->
        <div class="admintab-area mg-b-15">
            <div class="container-fluid">
               
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="admintab-wrap edu-tab1 mg-t-30" style="margin-top: 1px;  ">
                            <ul class="nav nav-tabs custom-menu-wrap custon-tab-menu-style1" style="margin-left: 16px;">
                                <li class="active"><a data-toggle="tab" href="#TabProject"><span class="edu-icon edu-analytics tab-custon-ic"></span>Malay</a>
                                </li>
                                <li><a data-toggle="tab" href="#TabDetails"><span class="edu-icon edu-analytics-arrow tab-custon-ic"></span>English</a>
                                </li>
                                <li><a data-toggle="tab" href="#TabPlan"><span class="edu-icon edu-analytics-bridge tab-custon-ic"></span>Revision</a>
                                </li>
                                <li><a data-toggle="tab" href="#Tab2"><span class="edu-icon edu-analytics-bridge tab-custon-ic"></span>Stationary</a>
                                </li>
                                <li style="float: right; margin-right: 16px; "><button onclick="location.href='../../Application Layer/Manage Cart/viewcart.php'" style="background-color: #EE4D2D;" type="button" class="btn btn-custon-rounded-two btn-warning" ><i class="fa fa-shopping-cart edu-warning-danger" aria-hidden="true">&nbsp;</i> Cart</button>
                                </li>
                            </ul>
                            <div class="tab-content" style="padding: 15px;">
                                <div id="TabProject" class="tab-pane in active animated flipInX custon-tab-style1">
                                     
                                
                                    <!-- /malaybook -->
                                    <?php include 'malaybook.php'; ?>  
                                
                                </div>
                                <div id="TabDetails" class="tab-pane animated flipInX custon-tab-style1">
             

                                    <!-- /english -->
                                    <?php include 'englishbook.php'; ?> 

                                </div>
                                <div id="TabPlan" class="tab-pane animated flipInX custon-tab-style1">
                                
                                    <!-- /revivion book -->
                                    <?php include 'revisionbook.php'; ?> 

                                </div>
                                <div id="Tab2" class="tab-pane animated flipInX custon-tab-style1">
                                     
                                    <!-- /stationary -->
                                    <?php include 'stationary.php'; ?> 

                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
      

<!-- /header -->
<?php include '../../x/layout/footer.php'; ?>