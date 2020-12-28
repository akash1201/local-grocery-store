<!DOCTYPE html>
<html lang="zxx">
<?php 
   include('connection.php');
   
   

?>
<head>
    <meta charset="UTF-8">
   
    <meta name="keywords" content="unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>

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
                <li><a href="./shoping-cart.php">MY Basket</a>
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
                        <a href="./index.php"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li><a href="./index.php">Home</a></li>
                            <li><a href="./shop-grid.php">Shop</a></li>
                            <li><a href="./shoping-cart.php">My Basket</a></li>
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
                            <span>Admin</span>
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
                                <h5>+91 973502831</h5>
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
                        <h2>Admin Page</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Admin</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
          <div id="rproduct" >
                 <h3>Add New Product</h3>
          <form method="POST" action="rprod.php" enctype="multipart/form-data">

             <input type="text" name="name" placeholder="Product Name"/><br><br>
             <input type="text" name="producer" placeholder="Manufacturer"/><br><br>



             <select name="c_id">



                 <option value="0" id="cate">Select Category</option> 
             <?php 
                $cat1="select * from prod_category where c_id>0";
                $cres=mysqli_query($conn,$cat1);
                
                while($crow=mysqli_fetch_array($cres)){

                     echo("<option value='".$crow['c_id']."'>".$crow['category']."</option>");

                }
                
             
             ?>
             </select><br><br>
                <input type="text" name="price" placeholder="Actual Price" /><br><br>
                <input type="text" name="d_price" placeholder="Offer Price" /><br><br>
                <input type="text" name="qty" placeholder="Quantity" /><br><br>
                <input type="file" name="img" /><br><br>
                <textarea name="description">Product Description</textarea><br><br> 
                <textarea name="ingedrients">Ingedrients</textarea><br><br>
                <textarea name="benefits">Benefits</textarea><br><br>


                <input type="submit" name="add" value="ADD" />
            
            </form>
                
          </div>

          <hr>
          <h3 class="order1">All Orders</h3>
   
    <section class="shoping-cart spad">
        <div class="container">
            
            <div class="row">
              
                <div class="col-lg-12">
              
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Order Id</th>
                                    <th>Name</th>
                                    <th>Phone Number</th>
                                    <th>Address</th>
                                    <th>Order</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                               
                               <?php 
                               
                                   $ord1="select * from orders where o_id>0 and payment_status='paid' ";
                                   $ordres=mysqli_query($conn,$ord1);

                                   while($ordrow=mysqli_fetch_array($ordres)){

                                         
                                    echo("<tr>
                                        <td>".$ordrow['o_id']."</td>
                                        <td>".$ordrow['name']."</td>
                                        <td>".$ordrow['phone']."</td>
                                        <td>".$ordrow['address']."</td>
                                        <td>".$ordrow['orderr']."</td>
                                        <td>".$ordrow['amount']."</td>
                                    
                                    </tr>");


                                   }

                                                               ?>
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

           

           
        </div>
    </section>
    
     <hr>

    <h3 class="order1">Suggestions</h3>
   
   <section class="shoping-cart spad">
       <div class="container">
           
           <div class="row">
             
               <div class="col-lg-12">
             
                   <div class="shoping__cart__table">
                       <table>
                           <thead>
                               <tr>
                                  
                                   <th>Suggestions</th>
                                  
                                   
                               </tr>
                           </thead>
                           <tbody>
                              
                              <?php 
                              
                                 $sug="select * from suggestions";
                                 $sugres=mysqli_query($conn,$sug);
                                 
                                 while($mangra=mysqli_fetch_array($sugres)){

                                 echo("<tr><td>".$mangra['sug']."</td><tr>");

                                 }

                                                              ?>
                              
                           </tbody>
                       </table>
                   </div>
               </div>
           </div>

          

            
       </div>
   </section>

    
   <h3 class="order1">Edit Products</h3>
   
   <section class="shoping-cart spad">
       <div class="container">
           
           <div class="row">
             
               <div class="col-lg-12">
             
                   <div class="shoping__cart__table">
                       <table>
                           <thead>
                               <tr>
                                  
                                   <th>Name</th>
                                   <th>Manufacturer</th>
                                   <th>Actual Price</th>
                                   <th>Offer Price</th>
                                   <th>In Stock</th>
                                   <th>Commit</th>
                                   <th>Delete</th>
                               </tr>
                           </thead>
                           <tbody>
                              
                              <?php 
                              
                                  $ord1="select * from products";
                                  $ordres=mysqli_query($conn,$ord1);

                                  while($p=mysqli_fetch_array($ordres)){

                                        
                                   echo(" <form action='update.php' method='GET'><tr>
                                      <input type='hidden' name='p_id' value='".$p['p_id']."' />
                                      <td>".$p['name']."</td>
                                      <td>".$p['producer']."</td>
                                      <td><input type='text' name='price' value='".$p['price']."' /></td>
                                      <td><input type='text' name='d_price' value='".$p['d_price']."' /></td>
                                      <td><input type='text' name='instock' value='".$p['instock']."' /></td>
                                      <td><input type='submit' value='Update' /></td>
                                     <td><a href='delete.php?p_id=".$p['p_id']."'>Delete</a></td>
                                      </form>
                                   </tr>");


                                  }

                                                              ?>
                              
                           </tbody>
                       </table>
                   </div>
               </div>
           </div>

          

          
       </div>
   </section>

   <hr>

     
   <h3 class="order1">Add Category</h3>
   
   <section class="shoping-cart spad">
       <div class="container">
           
           <div class="row">
             
               <div class="col-lg-12">
             
                   <div class="shoping__cart__table">
                       <table>
                           <thead>
                               <tr>
                                  
                                   <th>Category</th>
                                   <th>Picture</th>
                                   <th>Commit</th>
                                  
                               </tr>
                           </thead>
                           <tbody>
                              
                         <tr> <form id="addcate" action="addc.php" method="POST" enctype="multipart/form-data">  
       <td>
       <input type="text" name="category" />
       </td>
        
       <td>
        <input type="file" name="img" />
       </td>

       <td>
       <input type="submit" value="Submit" />
                                </td>
  
     
                                </td>  </form></tr>
                              
                           </tbody>
                       </table>
                   </div>
               </div>
           </div>

          

          
       </div>
   </section>
     <!-- <form id="addcate" action="addc.php" method="GET">
       
     <input type="text" name="category" />
     <br>
     <input type="submit" value="Submit" />


     </form> -->
   <hr>
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
                            <li>Dutta Sweet, Oodlabari</li>
                            <li>Near siliguri bus stand</li>
                            <li>District: Jalpaiguri</li>
                            <li>PIN: 735222</li>
                            <li><strong>Phone:</strong> +91 973502831</li>
                           
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
                        <form action="#">
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

