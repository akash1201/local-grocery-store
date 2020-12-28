<?php 
include('connection.php');

$q="select max(p_id) as p_id from products";

$re=mysqli_query($conn,$q);
while($r=mysqli_fetch_array($re)){
    
    $p_id=$r['p_id'];

}

$p_id=$p_id+1;


$name=$_POST['name'];
$producer=$_POST['producer'];
$c_id=$_POST['c_id'];
$price=$_POST['price'];
$d_price=$_POST['d_price'];
$qty=$_POST['qty'];
$description=$_POST['description'];
$ingedrients=$_POST['ingedrients'];
$benefits=$_POST['benefits'];


$fname=$p_id;
$t=explode(".", $_FILES["img"]["name"]);
$ext=end($t);
$imglink=md5($fname).".".$ext;
$path="./img/product/".$imglink;
move_uploaded_file($_FILES["img"]["tmp_name"],$path);
     



    $query1="insert into products(p_id,c_id,name,producer,price,qty,imglink,sale,d_price,description,ingedrients,benefits) values ('$p_id','$c_id','$name','$producer','$price','$qty','$imglink','1','$d_price','$description','$ingedrients','$benefits')";

    if(mysqli_query($conn,$query1)){

        header('Location: index.php');
    }


?>