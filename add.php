<?php 
   include('connection.php'); 

$s_id=$_GET['s_id'];
$p_id=$_GET['p_id'];
$c_id=$_GET['c_id'];

$query1="insert into cart(s_id,p_id,c_id) values ('$s_id','$p_id','$c_id')";

if(mysqli_query($conn,$query1)){

 echo("y");

}
else{
    
   

}



?>