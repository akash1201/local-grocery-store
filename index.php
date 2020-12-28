<?php 
   session_start();
?>
<!DOCTYPE html>
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
    <title>Magmart | Home</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="icon" href=".img/logo.png" />
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
                <li class="active"><a href="./index.php">Home</a></li>
                <li><a href="./shop-grid.php">Shop</a></li>
                <li><a href="./shoping-cart.php">Cart</a>
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
    

        <!--Main Content starts here-->
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.php"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="./index.php">Home</a></li>
                            <li><a href="./shop-grid.php">Shop</a></li>
                            <li><a href="./shoping-cart.php">Cart</a></li>
                            <li><a href="./contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        
                </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Category</span>
                        </div>
                        <ul style="display:none;">
                          <!-- Categories are fetched from database.-->  
                        <?php 
                           $cat="select * from prod_category where c_id>0";

                           $cresult = mysqli_query($conn,$cat);

                           while($cat1=mysqli_fetch_array($cresult)){

                               echo("<li><img style='width:15%' src='./img/categories/".$cat1['cimglink']."'/><a href='#'>".$cat1['category']."</a></li><hr>");

                           }
                        ?>

                            
                            
                            
                        </ul>
                    </div>
                </div>
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
                    <div class="hero__item set-bg" data-setbg="img/hero/banner.jpg">
                        <div class="hero__text">
                            <span>Magnessa</span>
                            <h2>Everything Natural </h2>
                            <!-- <p>Free Pickup and Delivery Available</p> -->
                            <a href="shop-grid.php" class="primary-btn">SHOP NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel" id="slider">

                          
                <?php 
                    $tmark="select * from products limit 5";

                    $tproducts=mysqli_query($conn,$tmark);

                    while($trow=mysqli_fetch_array($tproducts)){

                          echo(" <div class='col-lg-3'>
                          <div class='categories__item set-bg' data-setbg='img/product/".$trow['imglink']."'>
                              <h5><a>".$trow['name']."</a></h5>
                          </div>
                      </div>");

                    }
                
                
                ?>

                  
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->
    <span style="margin-left:45%; position:fixed;color:white; padding:0.5%; transition:500ms; opacity:0.7; background-color:gray; border-radius:10px; display:none" id="cart1">Item Added To Cart</span>
    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title" id="tsp">
                        <h2>Top Selling Products</h2>
                    </div>
                  
                </div>
            </div>
           
            <div class="row featured__filter">

              <?php 
                 
                 $topsell="select * from products order  by sale desc limit 8";

                 $topsellr=mysqli_query($conn,$topsell);

                 while($tsr=mysqli_fetch_array($topsellr)){
                         
                    echo("<div class='col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat'>
                  
                    <div class='featured__item'>
                        <div class='featured__item__pic set-bg' data-setbg='img/product/".$tsr['imglink']."'>
                            <ul class='featured__item__pic__hover'>
                            <li><a onclick='cart(".$_SESSION['s_id'].",".$tsr['p_id'].",".$tsr['c_id'].")'><i class='fa fa-shopping-cart'></i></a></li>
                            </ul>
                        </div>
                        
                        <div class='featured__item__text'>
                            <h6><a href='#'>".$tsr['name']."</a></h6>
                            <h5>Rs. ".$tsr['price']." for ".$tsr['qty']."</h5>
                      ");
                        if($tsr['price']!=$tsr['d_price']){

                            echo("<h6>You save ".($tsr['price']-$tsr['d_price'])."</h6>");
                        }
                      echo("  </div>
                      </div>
                  </div>");
                 }
              
              
              ?>
             
               
            </div>
        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/banner/banner-1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/banner/banner-2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

   
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
                            <textarea style="width:80%;" name="sug">Enter your suggestion here</textarea>
                             
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
    <script src="js/ajax1.js"></script>



</body>

</html>

