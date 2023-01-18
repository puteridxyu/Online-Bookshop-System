<?php
session_start();

if(isset($_GET['id']) && isset($_GET['name']) && isset($_GET['category']) && isset($_GET['price'])) {
    $id = $_GET['id'];
    $_SESSION['cart'][] = array("name"=>$_GET['name'],"category"=>$_GET['category'],"price"=>$_GET['price'],"qty"=>"1");
 
}


echo '

    <div class="alert alert-success" style="position: absolute;
    top: 50%; left: 50%; transform: translate(-50%, -50%); width: 300px; font-size: 25px; text-align: center; border: 2px solid grey; height: 200px; width: 500px; font-family: Arial, Helvetica, sans-serif;
    "><br><br><br>Item successfully added to cart!</div>

    ';
    
echo '<script>setTimeout(function(){window.location.href = "../../Application Layer/Manage Stock/bookdetails.php?id='.$id.'";},500);</script>';

?>