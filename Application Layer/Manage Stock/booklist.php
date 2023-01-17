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
                                            <h2>Manage Stock</h2>
                                           
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Stock</span>
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
                            <h4>Stocks List</h4>
                            <div class="breadcome-heading" style="margin-bottom: 20px;">
                                <form role="search" class="sr-input-func">
                                    <input type="text" id="searchInput" onkeyup="searchTable()" placeholder="Search name..." class="search-int form-control">
                                    <a onclick="searchTable()"><i class="fa fa-search"></i></a>
                                </form>
                            </div>
                            <div class="add-product">
                                <a title="Add Stock" href="addadmin.php">Add Stock</a>
                            </div>
                            <div class="asset-inner">
                                <table id="tableId2" style="max-width: 1100px;">
                                    <tr>
                                        <th style="width: 100px;">Book Name</th>
                                        <th style="width: 100px;">Category</th>
                                        <th style="width: 300px;">Description</th>
                                        <th style="width: 10px;">Page<br>Number</th>
                                        <th style="width: 10px;">Author</th>
                                        <th style="width: 100px;">Isbn</th>
                                        <th style="width: 100px;">Price</th>
                                        <th style="width: 150px;">Image</th>
                                        <th style="width: 10px;text-align: center;">Action</th>
                                    </tr>

                                    <?php
                                    while($row = mysqli_fetch_array($retrive))
                                    {
                                        ?>
                                        <tr>
                                        <td style="white-space: pre-line;"><?= $row['name'];?></td>
                                        <td style="white-space: pre-line;"><?= $row['category'];?></td>
                                        <td style="white-space: pre-line;"><?= $row['description'];?></td>
                                        <td style="white-space: pre-line;"><?= $row['page'];?></td>
                                        <td style="white-space: pre-line;"><?= $row['edition'];?></td>
                                        <td style="white-space: pre-line;"><?= $row['isbn'];?></td> 
                                        <td>RM <?= $row['price'];?>.00</td>
                                        <td><?php echo '<img src="data:image;base64, '.base64_encode($row['img']).'" alt= "Image" style="width: 100px; height: auto;">'; ?></td>
                                        <td style="display: flex; justify-content: center;">
                                        <button onclick="location.href='../../Application Layer/Manage Cart/viewcart.php'" data-toggle="tooltip" title="Edit Item" class="pd-setting-ed" style="background-color: #218838;"><i class="fa fa-edit" style="color: white;"aria-hidden="true"></i></button>
                                        <button onclick="if(confirm('Are you sure you want to delete this item?')){location.href='../../Business%20Service%20Layer/Manage%20Stock/delete.php?id=<?php echo $row["id"]; ?>'}" data-toggle="tooltip" title="Delete Item" class="pd-setting-ed" style="background-color: #DC3545;"><i class="fa fa-trash-o" style="color: white;"aria-hidden="true"></i></button>
                                      </tr>
                                    <?php
                                    }
                                
                                    ?>
<button id="popup-button">Open Pop-up</button>
                                   <!-- /malaybook -->
                                   <?php include 'details.php'; ?> 

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
    // Declare variables
        var table = document.getElementById("tableId2"),
            prevBtn = document.getElementById("prevBtn"),
            nextBtn = document.getElementById("nextBtn"),
            currentPage = 0,
            rowsPerPage = 11;

        // Hide all rows
        for (var i = 1; i < table.rows.length; i++) {
            table.rows[i].style.display = "none";
        }

        // Show the rows for the current page
        for (var i = (currentPage * rowsPerPage); i < (currentPage + 1) * rowsPerPage; i++) {
            if (table.rows[i]) {
                table.rows[i].style.display = "table-row";
            }
        }

        // Add event listeners to the buttons
        prevBtn.addEventListener("click", function() {
            if (currentPage > 0) {
                currentPage--;
                updateTable();
            }
        });
        nextBtn.addEventListener("click", function() {
            if (currentPage < numPages() - 1) {
                currentPage++;
                updateTable();
            }
        });

        // Function to update the table
        function updateTable() {
            for (var i = 1; i < table.rows.length; i++) {
                table.rows[i].style.display = "none";
            }
            for (var i = (currentPage * rowsPerPage); i < (currentPage + 1) * rowsPerPage; i++) {
                if (table.rows[i]) {
                    table.rows[i].style.display = "table-row";
                }
            }
        }

        // Function to calculate the number of pages
        function numPages() {
            return Math.ceil(table.rows.length / rowsPerPage);
        }
        </script>

        <script>
            // Get the table
        var table = document.getElementById("tableId2");

        // Add a new first column for the numbering
        for (var i = 0; i < table.rows.length; i++) {
            var newCell = table.rows[i].insertCell(0);
            newCell.innerHTML = i;
        }
</script>

<script>
function searchTable() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("searchInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("tableId2");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td");
        for (var j = 0; j < td.length; j++) {
            if (td[j]) {
                txtValue = td[j].textContent || td[j].innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                    break;
                } else {
                    tr[i].style.display = "none";
                }
            }       
        }
    }
}
</script>



