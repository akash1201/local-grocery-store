<?php 
    
header("Access-Control-Allow-Origin: *");
include('connection.php');

$p_id=$_GET['p_id'];

$query="select * from products where p_id='$p_id'";

$res=mysqli_query($conn,$query);
$row=mysqli_fetch_array($res);

$json='{"name":"'.$row['name'].'", "producer":"'.$row['producer'].'", "price":"'.$row['price'].'"}';

echo($json);


?>