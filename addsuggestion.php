<?php 
  
  include('connection.php');

  $sug=$_GET['sug'];

  $sug1="insert into suggestions values('$sug')";

  if(mysqli_query($conn,$sug1)){

   header('Location: index.php');

  }

?>