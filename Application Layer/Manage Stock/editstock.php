<?php 
session_start();


    //connect to the database
    $connection = mysqli_connect("127.0.0.1","root","","sdd");
    //get the data
    $id = $_GET['id'];
    $query = "SELECT * FROM books WHERE id='$id'";
    $option = mysqli_query($connection, "SELECT * FROM cat");
    $edit = mysqli_query($connection, $query);
    $row= mysqli_fetch_array($edit);
   


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
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            <h3>Edit Item</h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<div class="btn-group btn-custom-groups" style="float: right;">
											<a type="button" style=""class="btn btn-default" href="../../Application Layer/Manage Stock/booklist.php"><i class="fa fa-times" aria-hidden="true">&nbsp;</i> Back</a>
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- tabs start-->
        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">


                    
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="profile-info-inner">
                            <div class="profile-img" style="display: flex; justify-content: center;">
                            <img src="data:image;base64, <?php echo base64_encode($row['img']);?>" alt="Image">                            </div>
                            <div class="profile-details-hr">

							<div class="row">
							
                                    <div class="col-lg-12">
                                        <div class="address-hr">
                                            <p style="font-size: 20px;"><b> <?= $row['name'];?></b><br /></p>
                                        </div>
                                    </div>
                            </div>
                                
                                
                            </div>
                        </div>
                        
                    </div>

                    
                    <form action="../../Business Service Layer/Manage Stock/edit.php" method="POST">

                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12" >
                        <div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Edit Item Details</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit st-prf-pro">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        
                                                        <div class="form-group">
                                                            <p style="margin-bottom: -1px;"><b>Name</b></p>
                                                            <input name="name" title="Item Name"  type="text" class="form-control" value="<?= $row['name'];?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <p style="margin-bottom: -1px;"><b>Author/Brand</b></p>
                                                            <input name="edition" type="text" title="Author / Brand" class="form-control" value="<?= $row['edition'];?>">
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <p style="margin-bottom: -1px;"><b>Price</b></p>
                                                            <input name="price" type="number" title="Item Price" class="form-control" value="<?= $row['price'];?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <p style="margin-bottom: -1px;"><b>ISBN</b></p>
                                                            <input name="isbn" type="number" title="ISBN" class="form-control" value="<?= $row['isbn'];?>">
                                                        </div>
                                                        <div class="form-group">
                                                           
                                                            <input name="id" title="id"  type="text" class="form-control" value="<?= $row['id'];?>"  style="display: none;">
                                                        </div>
                                                        
                                                        
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                        <p style="margin-bottom: -1px;"><b>Category</b></p>
                                                            <select name="category" class="form-control">
																<option><?= $row['category'];?></option> 
																<?php foreach($option as $key => $value){ ?>
                                                                    <option value="<?=$value['category'] ;?>"><?=$value['category'] ;?></option>
                                                                <?php } ?>
															</select>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <p style="margin-bottom: -1px;"><b>Page</b></p>
                                                            <input name="page" type="number" title="Book Page" class="form-control" value="<?= $row['page'];?>">
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                        <p style="margin-bottom: -1px;"><b>Description</b></p>
                                                            <textarea name="description" style="height: 118px;" type="text" class="form-control" value="<?= $row['description'];?>"><?= $row['description'];?></textarea>
                                                        </div>


                                                       
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="payment-adress mg-t-15">
                                                            <button type="submit" class="btn btn-primary waves-effect waves-light mg-b-15">Submit</button>
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


                    
                    </form>
                                    

                </div>
            </div>
        </div>
      

<!-- /header -->
<?php include '../../x/layout/footer.php'; ?>