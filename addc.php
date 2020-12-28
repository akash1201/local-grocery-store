<?php
   include('connection.php');
   $cate=$_POST['category'];

   $query="select max(c_id) as c_id from prod_category";
   $res=mysqli_query($conn,$query);
   while($row=mysqli_fetch_array($res)){

      $c_id=$row['c_id'];

   }

    $c_id=$c_id+1;


       
$fname=$c_id;
$t=explode(".", $_FILES["img"]["name"]);
$ext=end($t);
$cimglink=md5($fname).".".$ext;
$path="./img/categories/".$cimglink;
move_uploaded_file($_FILES["img"]["tmp_name"],$path);

    $q1="insert into prod_category(c_id, category, cimglink) values('$c_id','$cate','$cimglink') ";
     
    if(mysqli_query($conn,$q1)){

        header('Location: admin.php');
        exit;
    }

?>