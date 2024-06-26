
<?php
$connection = mysqli_connect("127.0.0.1","root","","sdd");

if(!$connection)
{
	echo "Database connection faild...";
}

$retrive = mysqli_query($connection, "SELECT * FROM books ");
$row= mysqli_fetch_array($retrive);

?>



<div class="row" style="margin-top: -10px; ">


<div class="breadcome-heading" style="margin-left: 17px; margin-right: -86px; margin-top: 15px; display: flex; justify-content: space-between;">
    <div style="margin-top: 8px; display: flex; justify-content: flex-start;">
        <div>
            <form role="search" class="sr-input-func" >
            <input type="text" id="searchInput" onkeyup="searchTable()" placeholder="Search name..." style="background-color: white;"class="search-int form-control">
            <a onclick="searchTable()"><i class="fa fa-search"></i></a>
            </form>
        </div>
        
        <div>
            <a type="button"  onclick="reloadPage()" style="margin-left: 30px;" class="btn btn-default" ><i style="color: #EE4D2D;" class="fa fa-star edu-warning-danger" aria-hidden="true">&nbsp;&nbsp;&nbsp;</i>Top Items</a>
        </div>
    </div>
    <div style="float: right; width: auto; margin-right: 50px; ">

        <input type="text" style="visibility: hidden;" >
        <input type="text" style="visibility: hidden;" >
        

        <div class="btn-group btn-custom-groups" style="display: flex; justify-content: center; float: right; width: auto; ">
            <p style="margin: auto; width: 200px; padding: 10px;">Sort Price From :  </p>
            <a type="button" id="sort-ascending" style="margin: auto; width: 50%; padding: 10px;"  class="btn btn-default" ><i class="fa fa-sort-asc  edu-warning-danger" aria-hidden="true">&nbsp;&nbsp;&nbsp;</i>Lowest</a>
            <a type="button"  id="sort-descending" style="margin: auto; width: 50%; padding: 10px;" class="btn btn-default" ><i class="fa fa-sort-desc edu-warning-danger" aria-hidden="true">&nbsp;&nbsp;&nbsp;</i>Highest</a>
        </div>
    </div>
    <br><br>
</div>

<div id="items-container">

	<?php while($row = mysqli_fetch_array($retrive)) { ?>
		<div class="item col-lg-3 col-md-6 col-sm-6 col-xs-12" style="margin-top: 30px;" data-price="<?= $row['price'];?>">
			<div class="student-inner-std res-mg-b-30" style="height: 300px;">
				<br>
				<div class="student-img">
					<?php echo '<img src="data:image;base64, '.base64_encode($row['img']).'" alt= "Image" style="width: 100px; height: 100px;">'; ?>
				</div>
				<div class="student-dtl">
					<h2 style="height: 60px;"><?= $row['name'];?></h2>
					<p class="dp">RM<?= $row['price'];?>.00</p>
					
					<p class="dp-ag">
						<br>
						<div class="btn-group btn-custom-groups" style="display: flex; justify-content: center">
							<a type="button" style="background-color: #28A745;"class="btn btn-success" href="../../Application Layer/Manage Stock/bookdetails.php?id=<?php echo $row["id"]; ?>"><i class="fa fa-info-circle edu-informatio" aria-hidden="true">&nbsp;</i> Item Details</a>
							<a type="button" style="background-color: #EE4D2D;" class="btn btn-warning" href="../../Business Service Layer/Manage Cart/process_cart.php?name=<?php echo $row["name"];?> &category=<?php echo $row["category"]; ?>&price=<?php echo $row["price"]; ?>"><i class="fa fa-cart-plus edu-checked-pro" aria-hidden="true">&nbsp;</i> Add to Cart</a>
						</div>
					</p>
				</div>
			</div>
			<br>
		</div>
	<?php } ?>
	
</div>

</div>

<script>
    function reloadPage() {
        location.reload();
    }
</script>

<script>
  var sortAsccendingButton = document.getElementById("sort-ascending");
  sortAsccendingButton.addEventListener("click", function() {
    var items = document.querySelectorAll(".item");
    items = Array.from(items);
    items.sort(function(a, b) {
        var priceA = parseFloat(a.getAttribute("data-price"));
        var priceB = parseFloat(b.getAttribute("data-price"));
        return priceA - priceB;
    });
    var container = document.getElementById("items-container");
    while (container.firstChild) {
        container.removeChild(container.firstChild);
    }
    for (var i = 0; i < items.length; i++) {
        container.appendChild(items[i]);
    }
  });
</script>

<script>
  var sortDescendingButton = document.getElementById("sort-descending");
  sortDescendingButton.addEventListener("click", function() {
    var items = document.querySelectorAll(".item");
    items = Array.from(items);
    items.sort(function(a, b) {
        var priceA = parseFloat(a.getAttribute("data-price"));
        var priceB = parseFloat(b.getAttribute("data-price"));
        return priceB - priceA;
    });
    var container = document.getElementById("items-container");
    while (container.firstChild) {
        container.removeChild(container.firstChild);
    }
    for (var i = 0; i < items.length; i++) {
        container.appendChild(items[i]);
    }
  });
</script>
