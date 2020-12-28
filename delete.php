<?php 
include('connection.php');

$p_id=$_GET['p_id'];

$query="delete from products where p_id='$p_id'";

if(mysqli_query($conn,$query)){

    header('Location: admin.php'); 
}

?>