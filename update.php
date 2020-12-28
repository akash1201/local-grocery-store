<?php
include('connection.php'); 


$price=$_GET['price'];
$d_price=$_GET['d_price'];
$p_id=$_GET['p_id'];
$instock=$_GET['instock'];

$query="update products set price='$price', d_price='$d_price', instock='$instock' where p_id='$p_id'";

if(mysqli_query($conn,$query)){

  header('Location: admin.php');

}


?>

