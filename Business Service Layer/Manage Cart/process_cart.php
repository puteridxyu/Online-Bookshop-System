<?php session_start();

	if(isset($_GET['name']) and isset($_GET['category']) and isset($_GET['price']))
	{
		//add item
		$_SESSION['cart'][] = array("name"=>$_GET['name'],"category"=>$_GET['category'],"price"=>$_GET['price'],"qty"=>"1");
		header("location: http://localhost/sd/Application%20Layer/Manage%20Cart/viewcart.php");
	}
	else if(isset($_GET['id']))
	{
		//del a item
		$id = $_GET['id'];
		unset($_SESSION['cart'][$id]);
		header("location: http://localhost/sd/Application%20Layer/Manage%20Cart/viewcart.php");
	}
	else if(!empty($_POST))
	{
		//update qty
		foreach($_POST as $id=>$val)
		{
			$_SESSION['cart'][$id]['qty']=$val;
			header("location: http://localhost/sd/Application%20Layer/Manage%20Cart/viewcart.php");
		}
	}


?>