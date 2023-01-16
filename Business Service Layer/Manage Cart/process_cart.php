<?php session_start();

	if(isset($_GET['name']) and isset($_GET['category']) and isset($_GET['price']))
	{
		//add item
		$_SESSION['cart'][] = array("name"=>$_GET['name'],"category"=>$_GET['category'],"price"=>$_GET['price'],"qty"=>"1");
		header("location: ../../Application Layer/Manage Stock/catalogue.php");
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