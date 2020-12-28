<?php
if(!isset($_SESSION['s_id'])){
    
    $sessionq="select max(s_id) as s_id from session";
    $session_res=mysqli_query($conn,$sessionq);
    while($s_row=mysqli_fetch_array( $session_res)){
             
        $session_id=$s_row['s_id'];

    }
    
    $session_id=$session_id+1;
    
    $_SESSION['s_id']= $session_id;
  #updating session in DB;
    $up_s="insert into session values('$session_id')";
    mysqli_query($conn,$up_s);
 }
 ?>