<?php
$connection = mysqli_connect("127.0.0.1","root","","sdd");

if(!$connection)
{
	echo "Database connection faild...";
}


$retrive = mysqli_query($connection, "SELECT * FROM books where category = 'Revision books'");
$row= mysqli_fetch_array($retrive);



?>

<div class="row" style="margin-top: 20px;">

	<?php while($row = mysqli_fetch_array($retrive)) { ?>
		<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
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
		</div>
	<?php } ?>
	
</div>