<?php
  include('connection.php');
$s_id=$_GET['s_id'];
$p_id=$_GET['p_id'];

   $query="delete from cart where s_id='$s_id' AND p_id='$p_id'";

   if(mysqli_query($conn,$query)){
    
    header('Location: shoping-cart.php');
    exit;
   }

?>