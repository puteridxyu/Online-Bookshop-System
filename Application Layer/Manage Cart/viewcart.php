<?php 
session_start();
$servername =   '127.0.0.1';
$username   =   'root';
$password   =   '';
$dbname     =   'sdd';
$connection =   mysqli_connect($servername, $username, $password,"$dbname");
if(!$connection)
{
    die('Could not connect My Sql:' .mysql_error());
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

                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            <h2>Shopping Cart</h2>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Carts</span>
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
        <div class="product-status mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap drp-lst">
                            <h4>Cart Items</h4>
                            
                            
                            <div class="asset-inner">

                          <?php
							//	print_r($_SESSION);
							?>
						
							<form action="../../Business%20Service%20Layer/Manage%20Cart/process_cart.php" method="POST">
                                <table>
                                    <tr> 
                                        <th style="text-align:center">No</th>
                                        <th style="text-align:center">Category</th>
                                        <th style="text-align:center">Product</th>
                                        <th style="width: 150px;text-align:center">Quantity</th>
                                        <th style="width: 150px;text-align:center">Rate</th>
                                        <th style="width: 150px;text-align:center">Price (RM)</th>
                                        <th style="text-align:center">Action</th>
                                    </tr>
                                    
                                    <?php
									$tot = 0;
									$i = 1;
									if(isset($_SESSION['cart']))
									{

									foreach($_SESSION['cart'] as $name=>$x)
									{	
										echo '
                                    <tr>
                                       
                                        <td style="text-align:center"> '.$i.'
                                        <td style="text-align:center"> '.$x['category'].'
                                        <td style="text-align:center"> '.$x['name'].'
                                        <td style="text-align:center"> <input type="text" id="quantity" onkeydown="refresh()" size="2" value="'.$x['qty'].'" name="'.$name.'">
                                        <td style="text-align:center"> RM '.$x['price'].'.00
                                        <td style="text-align:center"> RM '.($x['qty']*$x['price']).'.00
                                        <td style="text-align:center">
                                        
                                            <a data-toggle="modal" title="Delete Item" style="background-color: #D80027;width:50px;"
                                            class="open-qq btn btn-danger shadow-sm rounded " href="../../Business%20Service%20Layer/Manage%20Cart/process_cart.php?id='.$name.'">
                                            <i class="fa fa-trash-o" style="color: white;"></i>
                                            </a>
                                        </td>

                                    </tr>
										';
										
										$tot = $tot + ($x['qty']*$x['price']);
										$i++;
										$e = rand(200,700);
									}
									}
								
								?>
                                        
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td style="font-weight: bold;text-align:center">Total</td>
                                        <td style="font-weight: bold;text-align:center">
                                            RM <?php echo $tot; ?>.00 
                                        </td>
                                    </form>
                                        
                                    </tr>

                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>
                                        <form action="../../Application%20Layer/Manage%20Delivery/custdetails.php" method="POST">
                                            <input type="hidden"  name="cid" value="<?php echo "$e" ?>" ><br>
                                            <input type="hidden"  name="cprice" value="<?php echo "$tot" ?>" ><br>
                                            <input type="submit" class="open-qq btn btn-success shadow-sm rounded pull-right" name="submit" value="CHECKOUT">
                                            
                                        </form>                                        
                                        </td>
                                    </tr>


                                   
                                    
                                </table>
                            </div>
                            
                            <div class="custom-pagination">
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- /header -->
<?php include '../../x/layout/footer.php'; ?>

