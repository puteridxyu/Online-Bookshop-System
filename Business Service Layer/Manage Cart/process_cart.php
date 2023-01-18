<?php session_start();

	if(isset($_GET['name']) and isset($_GET['category']) and isset($_GET['price']))
	{
		//add item
		$_SESSION['cart'][] = array("name"=>$_GET['name'],"category"=>$_GET['category'],"price"=>$_GET['price'],"qty"=>"1");

		echo '

    <div class="alert alert-success" style="position: absolute;
    top: 50%; left: 50%; transform: translate(-50%, -50%); width: 300px; font-size: 25px; text-align: center; border: 2px solid grey; height: 200px; width: 500px; font-family: Arial, Helvetica, sans-serif;
    "><br><br><br>Item successfully added to cart!</div>

    ';
    
		echo '<script>setTimeout(function(){window.location.href = "../../Application Layer/Manage Stock/catalogue.php";},500);</script>';
	}
	else if(isset($_GET['id']))
	{
		//del a item
		$id = $_GET['id'];
		unset($_SESSION['cart'][$id]);
		header("location: ../../Application Layer/Manage Cart/viewcart.php");
	}
	else if(!empty($_POST))
	{
		//update qty
		foreach($_POST as $id=>$val)
		{
			$_SESSION['cart'][$id]['qty']=$val;
			header("location: ../../Application Layer/Manage Cart/viewcart.php");
		}
	}


?>