<?php
require_once 'file:///C:/xampp/htdocs/SD/config.php';
$retrive = mysqli_query($connection, "SELECT * FROM register");
$row= mysqli_fetch_array($retrive);
?>

<!-- /header -->
<?php include '../../x/layout/head.php'; ?>

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
                                            <h2>Manage Customer</h2>
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Customer</span>
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
                            <h4>Customers List</h4>
                            <div class="breadcome-heading" style="margin-bottom: 20px;">
                                <form role="search" class="sr-input-func">
                                    <input type="text" id="searchInput" onkeyup="searchTable()" placeholder="Search name..." class="search-int form-control">
                                    <a onclick="searchTable()"><i class="fa fa-search"></i></a>
                                </form>
                            </div>
                            <div class="asset-inner">
                                <table id="tableId">
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Gender</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>

                                    <?php while($row = mysqli_fetch_array($retrive)) { ?>
                                    <tr>
                                        <td><?= $row['Firstname'];?></td>
                                        <td><?= $row['Lastname'];?></td>
                                        <td><?= $row['Gender'];?></td>
                                        <td><?= $row['Email'];?></td>
                                        <td>
                                        <button onclick="if(confirm('Are you sure you want to delete this item?')){location.href='../../Business%20Service%20Layer/Manage%20Registration/deletecustomer.php?id=<?php echo $row["id"]; ?>'}" data-toggle="tooltip" title="Delete Item" class="pd-setting-ed" style="background-color: #D80027;"><i class="fa fa-trash-o" style="color: white;"aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    <?php }?>
                                    
                                </table>
                            </div>
                            <div class="custom-pagination">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item"><a type="button" id="prevBtn" class="page-link" href="#">Previous</a></li>
                                        <li class="page-item"><a type="button" id="nextBtn"  class="page-link" href="#">Next</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<!-- /header -->
<?php include '../../x/layout/footer.php'; ?>

