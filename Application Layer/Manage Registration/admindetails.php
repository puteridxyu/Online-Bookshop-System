<?php
require_once 'file:///C:/xampp/htdocs/SD/config.php';
$retrive = mysqli_query($connection, "SELECT * FROM admin");
$row= mysqli_fetch_array($retrive);
?>

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
                                            <h2>Manage Admin</h2>
                                           
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Admin</span>
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
                            <h4>Admins List</h4>
                            <div class="breadcome-heading" style="margin-bottom: 20px;">
                                <form role="search" class="sr-input-func">
                                    <input type="text" id="searchInput" onkeyup="searchTable()" placeholder="Search name..." class="search-int form-control">
                                    <a onclick="searchTable()"><i class="fa fa-search"></i></a>
                                </form>
                            </div>
                            <div class="add-product">
                                <a title="Add Admin"href="addadmin.php">Add Admin</a>
                            </div>
                            <div class="asset-inner">
                                <table id="tableId"  >
                                    <tr>
                                        <th>Name</th>
                                        <th>Password</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>

                                    <?php while($row = mysqli_fetch_array($retrive)) { ?>
                                    <tr>
                                        <td><?= $row['aname'];?></td>
                                        <td><?= $row['apass'];?></td>
                                        <td><?= $row['aemail'];?></td>
                                        
                                        <td>
                                        <a href="#" class="btn pd-setting-ed" title="Delete Item" style="background-color: #D80027;"><i class="fa fa-trash-o" style="color: white;"aria-hidden="true"></a>
                                      </td>
                                    </tr>
                                    <?php }?>

                                </table >
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

<script>
    function searchTable() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("searchInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("tableId");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[2];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}
</script>

