<!DOCTYPE html>
<?php 
session_start();

?>
<html lang="zxx">
<?php 
  
  include('connection.php');
  include('getcookie.php');
?>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop | Products</title>

   
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    
    <link rel="icon" href="./img/logo.png" />
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

   <!-- Humberger Begin -->
   <div class="humberger__menu__overlay"></div>
      <div class="humberger__menu__wrapper">
          <div class="humberger__menu__logo">
              <a href="#"><img src="img/logo.png" alt=""></a>
          </div>
          <div class="humberger__menu__cart">
             
              
          </div>
          <div class="humberger__menu__widget">
             
              
          </div>
          <nav class="humberger__menu__nav mobile-menu">
              <ul>
                  <li><a href="./index.php">Home</a></li>
                  <li class="active"><a href="./shop-grid.php">Shop</a></li>
                  <li ><a href="./shoping-cart.php">Cart</a>
                  <li><a href="./contact.html">Contact</a></li>
              </ul>
          </nav>
          <div id="mobile-menu-wrap"></div>
          <div class="header__top__right__social">
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-instagram"></i></a>
             
          </div>
          <div class="humberger__menu__contact">
             
          </div>
      </div>
      <!-- Humberger End -->
    
    <!-- Header Section Begin -->
    <header class="header">
       
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li><a href="./index.php">Home</a></li>
                            <li class="active"><a href="./shop-grid.php">Shop</a></li>
                            <li><a href="./shoping-cart.php">Cart</a></li>
                            <li><a href="./contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->
 <span style="margin-left:45%; position:fixed; color:white; padding:0.5%;  background-color:gray; border-radius:10px; display:none;" id="cart1">Item Added To Cart</span>
    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-9">
                    <div class="hero__search">
                    <div class="hero__search__form">

                         
</div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+91 7431979503</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>MagMart</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.php">Home</a>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
  
    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                  <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                        <div class="sidebar__item" id="bigscreen">
                            <h4>Categories</h4>
                            <ul id="pcat1">

                            


                                <?php 
                                    $cat1="select * from prod_category where c_id>0";
                                    $catres=mysqli_query($conn,$cat1);
                                    $i=0;
                                    while($catrow=mysqli_fetch_array($catres))
                                    {
           
                                         if($i==0){
                                        echo(" <li><img style='width:15%' src='./img/categories/".$catrow['cimglink']."'/><a href='#result' class='xy activeprod1' onclick='ajax(this,".$catrow['c_id'].")'>".$catrow['category']."</a></li><hr>");
                                    }
                                  else{
                                    echo(" <li><img style='width:15%' src='./img/categories/".$catrow['cimglink']."'/><a href='#result' class='xy ' onclick='ajax(this,".$catrow['c_id'].")'>".$catrow['category']."</a></li><hr>");
                                  }
                                  ++$i;
                        }
                                ?>
                               
                               
                            </ul>
                        </div>
                       
                       
                       
                        <div class="sidebar__item">
                           
                        </div>
                        
                         <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all"  id="smallscreen" >
                            <i class="fa fa-bars"></i>
                            <span>Categories</span>
                        </div>
                        <ul style="display:none; width:100%">
                          <!-- Categories are fetched from database.-->  
                        <?php 
                           $cat="select * from prod_category where c_id>0";

                           $cresult = mysqli_query($conn,$cat);

                           while($cat1=mysqli_fetch_array($cresult)){

                            echo(" <li><img style='width:15%' src='./img/categories/".$cat1['cimglink']."'/><a href='#result' class='xy ' onclick='ajax(this,".$cat1['c_id'].")'>".$cat1['category']."</a></li><hr>");
                           }
                        ?>

                            
                            
                            
                        </ul>
                    </div>
                </div>
                    </div> 
                    
                    </div>
                <div class="col-lg-9 col-md-7">
                     <p style="color: red; text-align: center">Click On Product Image For Details</p>
                    <div class="row" id="result">


                    <?php 
                       $query="select * from products where c_id=1";
                       
                      

                        
   $result=mysqli_query($conn,$query);

   if($result==null){

    echo("<h2>NO Results Found</h2>");
   }
   else{

    while($tsr=mysqli_fetch_array($result)){
         
       
            if($tsr['instock']=='n' || $tsr['instock']=='N'){
                echo("<div id='sp1' class='col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat'>
        <div class='featured__item'>
            <div id='fimg' style='height:initial;' class='featured__item__pic'>
            <a href='productDetails.php?p_id=".$tsr['p_id']."'><img style='width:90%' src='./img/product/".$tsr['imglink']."'/></a>
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
                    <div id='fimg' style='height:initial;' class='featured__item__pic set-bg' >
                        <a href='productDetails.php?p_id=".$tsr['p_id']."'><img style='width:90%' src='./img/product/".$tsr['imglink']."'/></a>
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
                       
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="img/logo.png" alt=""></a>
                        </div>
                        <ul>
                        <li><strong>Address:</strong></li>
                            <li>Ghari More, Malbazar</li>
                            <li>Near Big Ben</li>
                            <li>District: Jalpaiguri</li>
                            <li>PIN: 735221</li>
                            <li><strong>Phone:</strong> +91 7431979503</li>
                           
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">About Our Shop</a></li>
                            <li><a href="#">Secure Shopping</a></li>
                            <li><a href="#">Delivery infomation</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <!-- <li><a href="#">Our Sitemap</a></li> -->
                        </ul>
                        <ul>
                            <li><a href="#">Who We Are</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Suggestions</h6>
                        <p>Your suggestion is valueable for us.</p>
                        <form action="addsuggestion.php" method="GET">
                            <textarea style="width:80%; ">Enter your suggestion here</textarea>
                             
                            <button type="submit" class="site-btn" style="position: initial; margin-left:25%">Submit</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p>
  </p></div>
                        <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/ajax.js"></script>
    <script src="js/ajax1.js"></script>
    <link rel="stylesheet" href="css/style1.css" type="text/css">

</body>

</html>

<link rel="stylesheet" href="css/style1.css" type="text/css">

