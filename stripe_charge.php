<?php
   
   session_start();

   if(!empty($_POST['stripeToken'])){

      $token= $_POST['stripeToken'];
      // $name=$_POST['card-holder-name'];
      // $email=$_POST['card-holder-email'];
      // $orderid=$_POST['orderid'];
      // $amount=$_POST['grandtotal'];
      $card_num=$_POST['card-number'];
      $card_cvc=$_POST['cvv'];
      $card_exp_month=$_POST['expiry-month'];
      $card_exp_year=$_POST['expiry-year'];

      require_once('stripe-php/init.php');
     

     

      $stripe = array(
          "secret_key" => "sk_test_51H0YGxGwXXRpc7xw62YMjLaQm7GpQHlcGLuIZXkN3v7AmqFVceuS9ZCFINeK7VM2fIZoTpVU1l8nuilIkaY9tJge00Nr90MYIE",
          "publishable_key" => "pk_test_51H0YGxGwXXRpc7xwfDTMsj78r7OOF44EHhO0HK8miXSCQmU6xtscqW6fdtPvRK1B507JTcJH5pZu2iuS8Eogia3A00QrXgECi5"
      );

      \Stripe\Stripe::setApiKey('sk_test_51H0YGxGwXXRpc7xw62YMjLaQm7GpQHlcGLuIZXkN3v7AmqFVceuS9ZCFINeK7VM2fIZoTpVU1l8nuilIkaY9tJge00Nr90MYIE');

      //add customer to stripe


      $payment_intent = \Stripe\PaymentIntent::create([
        'amount' =>$_SESSION['amount'],
        'currency' => 'inr',
        'description' => 'Product Bill Amount',
      ]);

      $customer = \Stripe\Customer::create([
        'name' => $_SESSION['name'],
        'source' => $token,
        'address' => [
          'line1' => $_SESSION['street'],
          'postal_code' => $_SESSION['zipcode'],
          'city' => $_SESSION['town'],
          'state' => $_SESSION['state'],
          'country' => $_SESSION['country'],
        ],
      ]);

    //   $payment_intent = \Stripe\PaymentIntent::create([
    //     'description' => 'Software development services',
    //     'shipping' => [
    //       'name' => 'Jenny Rosen',
    //       'address' => [
    //         'line1' => '510 Townsend St',
    //         'postal_code' => '98140',
    //         'city' => 'San Francisco',
    //         'state' => 'CA',
    //         'country' => 'US',
    //       ],
    //     ],
    //     'amount' => 1099,
    //     'currency' => 'usd',
    //     'payment_method_types' => ['card'],
    //   ]);

      
      $oid=$_SESSION['o_id'];
      $price=$_SESSION['amount'];
      $currency="inr";

      $charge = \Stripe\Charge::create(array(
          'customer' => $customer->id,
          'amount' => $price*100,
          'currency' => $currency,
          'description' => $oid,
          'metadata' => array(
              'order_id' => $oid
          )
      ));



    //retrive charge details

    $chargeJson = $charge->jsonSerialize();


    //check if charge was successful


    if($chargeJson['amount_refunded']==0 && empty($chargeJson['failure_code'])&& $chargeJson['paid']==1  && $chargeJson['captured']==1){


        $query="update orders set payment_status='paid' where o_id='".$oid."' and phone='".$_SESSION['number']."'";

        include_once('./connection.php');

        mysqli_query($conn,$query);
      
       

        $status="<p>Order Placed Successfully....<a href='./index.php'>Home</a></p>";

    }




   }else{

    $status="<p>Error has occured....<a href='../index.php'>Home</a></p>";
   }

   echo($status);
  

?>


<!-- 
//   $customer = \Stripe\Customer::create(array(
           
           //     'email' => $email,
           //     'source' => $token,
           //     'name' => $name,
           //     'description' => 'Payment For Payment'
       
           //   ));
       
           // $customer =
       
       
           // \Stripe\PaymentIntent::create([
           //     'amount' =>$amount,
           //     'name' => $name,
           //     'address' => [
           //       'line1' => '510 Townsend St',
           //       'postal_code' => '98140',
           //       'city' => 'San Francisco',
           //       'state' => 'CA',
           //       'country' => 'US',
           //     ],
           //     'currency' => 'usd',
           //     'payment_method_types' => ['card'],
           //   ]);
       
       
           // \Stripe\Customer::create([
               // 'name' => $name,
               // 'address' => [
               //   'line1' => '510 Townsend St',
               //   'postal_code' => '98140',
               //   'city' => 'San Francisco',
               //   'state' => 'CA',
               //   'country' => 'US',
               // ],
           //   ]);
              
           //   \Stripe\PaymentIntent::create([
           //     'amount' =>$amount,
           //     'currency' => 'usd',
           //     'payment_method_types' => ['card'],
           //   ]);
             //item information
       
        -->