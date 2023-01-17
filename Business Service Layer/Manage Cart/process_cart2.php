<?php
session_start();

if(isset($_GET['id']) && isset($_GET['name']) && isset($_GET['category']) && isset($_GET['price'])) {
    $id = $_GET['id'];
    $_SESSION['cart'][] = array("name"=>$_GET['name'],"category"=>$_GET['category'],"price"=>$_GET['price'],"qty"=>"1");
 
}

echo '

<div class="alert alert-success">Item successfully added to cart!</div>

';
echo '<script>setTimeout(function(){window.location.href = "../../Application Layer/Manage Stock/bookdetails.php?id='.$id.'";},500);</script>';

?>