<?php 
   session_start();
?>
<?php 
   include('connection.php');
   include('getcookie.php'); 

   $c_id=$_GET['c_id'];
    
   $query="select * from products where c_id='$c_id'";
   
   $result=mysqli_query($conn,$query);

   if($result==null){

    echo("<h2>NO Results Found</h2>");
   }
   else{

    while($tsr=mysqli_fetch_array($result)){
         
       
            if($tsr['instock']=='n' || $tsr['instock']=='N'){
                echo("<div id='sp1' class='col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat'>
        <div class='featured__item'>
            <div id='fimg' style='height:initial;' class='featured__item__pic set-bg' data-setbg='img/product/".$tsr['imglink']."'>
               <a href='productDetails.php?p_id=".$tsr['p_id']."'> <img style='width:90%' src='./img/product/".$tsr['imglink']."'/> </a>
                <ul class='featured__item__pic__hover'>
                
                <li><a onclick='cart(".$_SESSION['s_id'].",".$tsr['p_id'].",".$tsr['c_id'].")'></a></li>
                </ul>
            </div>
            <div class='featured__item__text' id='ftext'>
                <h6><a href='#'>".$tsr['name']."</a></h6>
                <h5>Rs. ".$tsr['d_price']." for ".$tsr['qty']."</h5>
          ");
                echo("<span id='bspan' style='color:red'>Out Of Stock</span>");

            }

            else{

                echo("<div id='sp1' class='col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat'>
                <div class='featured__item'>
                    <div id='fimg' style='height:initial;' class='featured__item__pic set-bg' data-setbg='img/product/".$tsr['imglink']."'>
                       <a href='productDetails.php?p_id=".$tsr['p_id']."'> <img style='width:90%' src='./img/product/".$tsr['imglink']."'/> </a>
                        <ul class='featured__item__pic__hover'>
                        
                        <li><a onclick='cart(".$_SESSION['s_id'].",".$tsr['p_id'].",".$tsr['c_id'].")'><i class='fa fa-shopping-cart'></i></a></li>
                        </ul>
                    </div>
                    <div class='featured__item__text' id='ftext'>
                        <h6><a href='#'>".$tsr['name']."</a></h6>
                        <h5>Rs. ".$tsr['d_price'].".00 for ".$tsr['qty']."</h5> 
                       
                  ");
                    if($tsr['price']!=$tsr['d_price']){
                            
                        $dis=(($tsr['price']-$tsr['d_price'])/$tsr['price'])*100;
                        
                        $dis=(int)$dis;
                        echo(" <span style='color:red'><strike>Rs.".$tsr['price'].".00</strike></span><br>");
                        echo("<span>(".$dis."% Off)</span>");
                        echo("<h6>You save Rs.".($tsr['price']-$tsr['d_price'])."</h6>");
                       
                    }

            }
            
            // <span id='sspan' style='color:red; display:none'>Out Of Stock</span>
            if($tsr['instock']=='n' || $tsr['instock']=='N'){
                 echo("  </div>
        
          </div>
      </div>");
                
            }
            else{
          echo("  </div>
          <div  id='atcbut' onclick='cart(".$_SESSION['s_id'].",".$tsr['p_id'].",".$tsr['c_id'].")'><button>Add To Cart</button></div>
          </div>
      </div>");
            }

    }
   }

?>