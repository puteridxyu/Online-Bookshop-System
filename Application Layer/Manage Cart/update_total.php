<?php
    $quantity = $_POST["quantity"];
    $price = $_POST["price"];

    $total = $quantity * $price;
    $_SESSION["total"] = $total;
    echo $total;
?>