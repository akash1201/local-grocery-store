<!DOCTYPE html>
<html lang="zxx">

<head>

<?php  
include('./connection.php');
   
   $p_id=$_GET['p_id'];

//    if(!isset($_GET['p_id'])){
//        header('Location: index.php');
//        exit;
//    }



?>

    <meta charset="UTF-8">
    
    <meta name="keywords" content="unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Details</title>

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
    <link rel="stylesheet" href="css/style1.css" type="text/css">
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
                  <li><a href="./shop-grid.php">Shop</a></li>
                  <li><a href="./shoping-cart.php">Cart</a>
                  <li class="active"><a href="./contact.html">Contact</a></li>
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
                        <li><a href="./index.php">Home</a></li>
                        <li><a href="./shop-grid.php">Shop</a></li>
                        <li><a href="./shoping-cart.html">Cart</a></li>
                        <li class="active"><a href="./contact.html">Contact</a></li>
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
    <section class="hero hero-normal">
        <div class="container">
           
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
                        <h2>Product Details</h2>
                        <div class="breadcrumb__option">
                            <!-- <a href="./index.html">Home</a>
                            <span>Contact Us</span> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Contact Section Begin -->
       <?php 
          
          $query="select * from products where p_id='".$p_id."'";
          $result=mysqli_query($conn,$query);
          $row=mysqli_fetch_array($result);
       
       ?>
        <div class="container">
            <div class="row">
                
                  <div class="product-details" style="padding-top:10px">
                        
                        <div class="product-name">
                        <h2><?php  echo($row['name']);  ?></h2>
                         <!-- <img src="./test/magHomecare.png"/> -->

                         <?php 
                         
                         echo("<img src='./img/product/".$row['imglink']."' />");

                         ?>

                         <p style="margin-right:5%">
                            
                         <?php 
                         
                         echo($row['description']);
                         
                         ?>

                         </p>
                         <hr>
                         <h4>Benefits</h4>

                         <ul>
                             <!-- <li>Good for</li>
                             <li>Good for</li>
                             <li>Good for</li>
                             <li>Good for</li> -->

                             <?php 
                             
                                $ben=$row['benefits'];
                                $ben1=explode(",",$ben);

                                for($i=0;$i<sizeof($ben1);++$i){
                                    echo("<li>".$ben1[$i]."</li>");
                                }
                             
                             ?>

                         </ul>
                         
                        <hr>

                         <h4>Ingredients</h4>
                        <ul>
                             <!-- <li>Good for</li>
                             <li>Good for</li>
                             <li>Good for</li>
                             <li>Good for</li> -->

  
                             <?php 
                             
                             $ing=$row['ingedrients'];
                             $ing1=explode(",",$ing);

                             for($i=0;$i<sizeof($ing1);++$i){
                                 echo("<li>".$ing1[$i]."</li>");
                             }
                          
                          ?>

                         </ul>
                          
                        </div>
                        
                        <div class="product-ingedrients">
                            <h3>Announcements/Blogs</h3>

                        </div>

                  </div>
                
               
            </div>
        </div>
    
    <!-- Contact Section End -->

    
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



</body>

</html>
