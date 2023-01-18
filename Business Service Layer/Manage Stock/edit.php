<?php 
session_start();

    //connect to the database
    $connection = mysqli_connect("127.0.0.1","root","","sdd");
    //update the data
    $id = $_POST['id'];
    $name = $_POST['name'];
    $edition = $_POST['edition'];
    $price = $_POST['price'];
    $isbn = $_POST['isbn'];
    $page = $_POST['page'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $query = "UPDATE books SET name='$name', edition='$edition', price='$price' , isbn='$isbn' , page='$page', category='$category', description='$description'  WHERE id='$id'";
    mysqli_query($connection, $query);
    
    echo '

    <div class="alert alert-success" style="position: absolute;
    top: 50%; left: 50%; transform: translate(-50%, -50%); width: 300px; font-size: 25px; text-align: center; border: 2px solid grey; height: 200px; width: 500px; font-family: Arial, Helvetica, sans-serif;
    "><br><br><br>The details successfully updated!</div>

    ';
    echo '<script>setTimeout(function(){window.location.href = "../../Application Layer/Manage Stock/editstock.php?id='.$id.'";},400);</script>';

?>