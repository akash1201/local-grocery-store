<?php 
   
  session_start();
  
  include('./connection.php');
  


if(!isset($_SESSION['o_id'])){
    header('Location: cart.php');
    exit;
}
  
  
  

    


?>


<!DOCTYPE html>
<html dir="ltr" lang="en-US">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="author" content="SemiColonWeb" />
        <!-- Stylesheets
        ============================================= -->
        <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="./theme/css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="./theme/style.css" type="text/css" />
        <link rel="stylesheet" href="./theme/css/swiper.css" type="text/css" />
        <link rel="stylesheet" href="./theme/css/dark.css" type="text/css" />
        <link rel="stylesheet" href="./theme/css/font-icons.css" type="text/css" />
        <link rel="stylesheet" href="./theme/css/animate.css" type="text/css" />
        <link rel="stylesheet" href="./theme/css/magnific-popup.css" type="text/css" />
        <link rel="stylesheet" href="./theme/css/responsive.css" type="text/css" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lt IE 9]>
                <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
        <![endif]-->
        <!-- Document Title
        ============================================= -->
        <title>Payment</title>       
        <style>
            /***   Footer Styling   ***/
            #footer {
                border-top: 0px;
            }
            #footer.dark {
                background-color: #fff;
            }
            .dark #copyrights {
                border-top: 1px solid rgb(153, 153, 153);
                background-color: #fff;
            }
            #copyrights {
                padding: 12px;
            }
            .dark .widget h4 {
                color: rgb(51, 51, 51);
            }
            .dark .widget_links li a {
                color: rgb(54, 0, 96);
            }
            .dark .widget_links li a:hover {
                color: #1ABC9C;
            }
            .widget > h4 {
                text-transform: inherit;
            }
            .dark .footer-widgets-wrap a {
                color: black;
            }
            .dark .footer-widgets-wrap a:hover {
                color: black;
            }
            .dark .spost .entry-title h4 a {
                color: rgb(54, 0, 96);
            }
            .dark .spost .entry-title h4 a:hover {
                color: #1ABC9C;
            }
            #copyrights .col_half {
                color: black;
            }
            .dark #copyrights {
                text-shadow: 0px 0px 0px rgba(0,0,0,0.1);
            }
            #footer .footer-widgets-wrap {
                padding: 0px 0px 60px 0px;
            }
            /***   End   ***/
            label {
                text-transform: inherit;
            }
        </style>
    </head>
    <body class="stretched">
        <!-- Document Wrapper
        ============================================= -->
        <div id="wrapper" class="clearfix">
            <!-- Content
            ============================================= -->
            <section id="content">
                <div class="content-wrap" style="padding-top: 22px; padding-bottom: 0px;">
                    <div class="container clearfix">
                        <div class="tabs divcenter nobottommargin clearfix" id="tab-login-register" style="max-width: 500px">
                            <div class="row center">
                                <a href="#">
                                    <h2 style="margin-bottom: 12px"></h2>
                                </a>
                            </div>
                            <div class="panel panel-default nobottommargin">
                                <div class="panel-body" style="padding: 40px">
                                    <h3>Payment</h3>
                                    <span id="error" style="color:red"></span>

                                    <form id="paymentFrm"  class="nobottommargin" action="stripe_charge.php" method="POST">
                                     
                                      <div class="col_full">
                                            <label for="card-holder-name">Card Holder Name</label>
                                            <input type="text" id="card-holder-name" name="card-holder-name" placeholder="Name"  class="form-control" required />
                                        </div>
                                      
                                        <div class="col_full">
                                            <label for="card-holder-email">Email</label>
                                            <input type="email" id="card-holder-email" name="card-holder-email" placeholder="Email"  class="form-control" required />
                                        </div>

                                        <div class="col_full">
                                            <label for="card-number">Card Number</label>
                                            <input type="text" id="card-number" size="16"  name="card-number"  class="form-control" autocomplete="off" required />
                                        </div>

                                    <div style="display:flex">
                                        <div class="col_full">
                                            <label for="expiry-month">Expiry Date</label>
                                            <div style="display:flex">
                                            <input type="text" id="expiry-month" size="2" name="expiry-month" placeholder="MM" class="form-control"  style="width:35%" required />
                                            <input type="text" id="expiry-year" size="4" name="expiry-year" placeholder="YYYY" class="form-control"  style="width:40%" required />
                                            </div>
                                          </div>
                                        
                                        <div class="col_full">
                                            <label for="cvv">CVV</label>
                                            <input type="text" id="cvv" size="3" name="cvv" placeholder="CVV" class="form-control" style="width:50%" autocomplete="off" required />
                                        </div>
                                      </div> 
                                        <div class="col_full nobottommargin">
                                            <button type="submit" class="button button-3d button-black nomargin" id="payBtn" name="payBtn">pay Rs.<?php echo($_SESSION['amount']);?></button>
                                                                                       
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
           
        </div><br/><br/>
        <!-- Content   End
        ============================================= -->
        <!-- Footer
        ============================================= -->
        <footer id="footer" class="dark">
            <div id="copyrights">
                <div class="container clearfix">
                    <div class="col_half">
                        Copyrights &copy; 2020 MagMart.in, Inc.
                    </div>
                    <div class="col_half col_last tright">
                        <div class="clear"></div>
                        <i class="icon-envelope2"></i> contact@magmart.in <span class="middot">&middot;</span> <i class="icon-headphones"></i> +91-7431979503 <span class="middot">&middot;</span>
                    </div>
                </div>
            </div> 
            <!--#copyrights end--> 
        </footer>
        <div id="gotoTop" class="icon-angle-up"></div>
        <!-- External JavaScripts
        ============================================= -->
        <script type="text/javascript" src="./theme/js/jquery.js"></script>
        <!-- <script type="text/javascript" src="../theme/js/plugins.js"></script> -->
        <!-- Footer Scripts
        ============================================= -->
        <script type="text/javascript" src="./theme/js/functions.js"></script>
    </body>
</html>

<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script type="text/javascript">
  
   Stripe.setPublishableKey("pk_test_51H0YGxGwXXRpc7xwfDTMsj78r7OOF44EHhO0HK8miXSCQmU6xtscqW6fdtPvRK1B507JTcJH5pZu2iuS8Eogia3A00QrXgECi5");

   function stripeResponseHandler(status, response){
     if(response.error){
      $("#payBtn").removeAttr("disabled");
      $("#error").html(response.error.message);

     }else{

      var form$= $("#paymentFrm");
      var token=response["id"];
      form$.append("<input type='hidden' name='stripeToken' value='" +token+ "' />");
     
      form$.get(0).submit();
     }
   }


  $(document).ready(function(){

    console.log("Document Loaded");  

       $("#paymentFrm").submit(function(event){
                    
        console.log("Submit");

        //Disable pay button
                  $("#payBtn").attr("disabled","disabled");
        
                  Stripe.createToken({
                     
                    number: $("#card-number").val(),
                    cvc: $("#cvv").val(),
                    exp_month: $("#expiry-month").val(),
                    exp_year: $("#expiry-year").val()

                  },stripeResponseHandler);
              
                  return false;
       });
   
  });
</script>