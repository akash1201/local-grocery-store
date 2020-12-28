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
   
    <meta name="keywords" content="unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart | Bill</title>

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
                  <li class="active"><a href="./shoping-cart.php">Cart</a>
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
                            <li><a href="./shop-grid.php">Shop</a></li>
                            <li  class="active"><a href="./shoping-cart.php">Cart</a></li>
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
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <span>Your Cart</span>
                        </div>
                       
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
                        <h2>Shopping Cart</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Products</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- <tr>
                                    <td class="shoping__cart__item">
                                        <img src="img/cart/cart-1.jpg" alt="">
                                        <h5>Vegetable’s Package</h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                        $55.00
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="1">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total">
                                        $110.00
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <span class="icon_close"></span>
                                    </td>
                                </tr> -->
                               <?php 
                                 $s_id=$_SESSION['s_id'];
                                
                                 $query="select * from cart where s_id='$s_id'";
                                 $result=mysqli_query($conn,$query);

                                 while($row=mysqli_fetch_array( $result)){
                                  
                                    $p_id=$row['p_id'];

                                    $query1="select * from products where p_id='$p_id'";
                                     
                                    $result1=mysqli_query($conn,$query1);
                                     
                                    while($row1=mysqli_fetch_array($result1)){

                                         
                                        echo("<tr>
                                        <td class='shoping__cart__item'>
                                            <img src='img/product/".$row1['imglink']."' style='width:10%' >
                                            <h5 class='pname'>".$row1['name']."</h5>
                                            <span class='p_qty' style='display:none'>".$row1['qty']."</span>
                                            <span class='p_man' style='display:none'>".$row1['producer']."</span>
                                        </td>
                                        <td class='shoping__cart__price'>
                                           ".$row1['d_price']."
                                        </td>
                                        <td class='shoping__cart__quantity'>
                                            <div class='quantity' onclick='update()'>
                                                <div class='pro-qty' >
                                                    <input type='text' onkeyup='update()' class='qty' value='1'>
                                                </div>
                                            </div>
                                        </td>
                                        <td class='shoping__cart__total'>
                                           ".$row1['d_price']."
                                        </td>
                                        <td class='shoping__cart__item__close'>
                                           <a href='c_del.php?s_id=".$s_id."&p_id=".$p_id."'> <span class='icon_close'></span></a>
                                        </td>
                                    </tr>");

                                    }
                                 }
                               
                               ?>
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
           
                <div class="col-lg-12">
                   
                </div>
                <div class="col-lg-6">
                    <form method="POST" action="placeorder.php">
                    <div class="shoping__continue">
                        <div class="shoping__discount">
                              <h5>Shippig Details</h5>
                              <input type="text" name="name" class="inp" placeholder="Enter Name" required/> <br><br>
                              <input type="number" name="phone" class="inp" placeholder="Phone Number" required /><br><br>
                              <input type="text" name="street" class="inp" placeholder="Street/Locality" required /><br><br>
                              <input type="text" name="town" class="inp" placeholder="Town/City" required /><br><br>   
                              <input type="text" name="state" class="inp" placeholder="State" required /><br><br>
                              <input type="text" name="country" class="inp" placeholder="Country" required /><br><br>
                              <input type="text" name="zipcode" class="inp" placeholder="Zip Code" required /><br><br>
                              <input type="hidden" name="order" id="order" value=""/>
                             
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Cart Total</h5>
                        <ul>
                          
                            <li>Total <span><input type="text"  id="carttotal" name="amount" readonly /></span></li>
                            <!-- <input type="hidden" name="order"  id="order"/> -->
                        </ul>
                        <button type="submit" id="submit1" class="primary-btn">PROCEED AND PAY</button>
                        <!-- <a href="#" onclick="changel()" id="submit1" class="primary-btn">PROCEED TO CHECKOUT</a> -->
                                </form>      
                    </div>
                </div>
               
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->

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
    <script src="js/ajax1.js"></script>
    <script src="js/shoping.js"></script>
     

</body>

</html>

