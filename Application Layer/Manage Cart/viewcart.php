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
                            <h4>Buying List</h4>
                            
                           
                            <div class="asset-inner">

                          <?php
							//	print_r($_SESSION);
							?>
						
							<form action="../../Business%20Service%20Layer/Manage%20Cart/process_cart.php" method="POST">
                                <table  >
                                    <tr>
                                        <th>No</th>
                                        <th>Category</th>
                                        <th>Product</th>
                                        <th style="width: 150px;">Quantity</th>
                                        <th style="width: 150px;">Rate</th>
                                        <th style="width: 150px;">Price (RM)</th>
                                        <th>Action</th>
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
                                       
                                        <td> '.$i.'
                                        <td> '.$x['category'].'
                                        <td> '.$x['name'].'
                                        <td> <input type="text" size="2" value="'.$x['qty'].'" name="'.$name.'">
                                        <td> RM '.$x['price'].'.00
                                        <td> RM '.($x['qty']*$x['price']).'.00
                                        <td>
                                        
                                            <a data-toggle="modal" title="Delete Item" style="background-color: #D80027;"
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
                                        <td style="font-weight: bold;">Total</td>
                                        <td>
                                            RM <?php echo $tot; ?>.00 
                                        </td>
                                    </form>
                                        <td>
                                        <button data-toggle="tooltip" title="Re-calculate" class="pd-setting-ed" type="submit" value=" Re-Calculate " style="background-color: #555555; color: white;"><i class="fa fa-refresh" style="color: white;"aria-hidden="true"></i>&nbsp;Recalculate</button>
                                        
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>
                                        <form action="#">
                                            <input type="hidden"  name="cid" value="<?php echo "$e" ?>" ><br>
                                            <input type="hidden"  name="cprice" value="<?php echo "$tot" ?>" ><br>
                                            <input type="submit" name="submit" value="CONFIRM & PROCEED">
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

