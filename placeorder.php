<?php 
    include('connection.php');
    session_start();

  $name=$_POST['name'];
  $number=$_POST['phone'];
  $street=$_POST['street'];
  $town=$_POST['town'];
  $state=$_POST['state'];
  $country=$_POST['country'];
  $zipcode=$_POST['zipcode'];
  $json=$_POST['order'];
  $order_date=date('yy-m-d');
  

  $ord=json_decode($json,true);

  $amount=$ord['grandtotal'];
  
  $order="";
  for($i=0;$i<sizeof($ord['order']);++$i){
   
    $order=$order.$ord['order'][$i]['name']."(X ".$ord['order'][$i]['qty'].") @".$ord['order'][$i]['price'].", ";
     

  }

  $address=$street.",".$town.",".$state.",".$country.", Zip Code:".$zipcode;



   $query="select max(o_id) as o_id from orders";
   $result=mysqli_query($conn,$query);

   while($row=mysqli_fetch_array($result)){
       
    $o_id=$row['o_id'];

   }

$o_id=$o_id+1;

$_SESSION['o_id']=$o_id;
$_SESSION['name']=$name;
$_SESSION['number']=$number;
$_SESSION['amount']=$amount;
$_SESSION['street']=$street;
$_SESSION['town']=$town;
$_SESSION['state']=$state;
$_SESSION['country']=$country;
$_SESSION['zipcode']=$zipcode;




$insert="insert into orders(o_id,name,phone,orderr,amount,address,order_date) values ('$o_id','$name','$number','$order','$amount','$address','$order_date')";

if(mysqli_query($conn,$insert)){

 header('Location: payment.php');
 exit;
    


}


?>


