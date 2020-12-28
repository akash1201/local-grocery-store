<?php
   $server="localhost";
   $uname="root";
   $pass="";
   $dbname="magmart";

   $conn=mysqli_connect($server,$uname,$pass,$dbname);

   if(!$conn){
    echo("Failed to connect database!!");
}

?>