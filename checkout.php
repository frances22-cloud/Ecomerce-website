<?php

require("connect.php");
session_start();
if(isset($_POST['order_btn'])){

   $UserName = $_POST['UserName'];
   $PhoneNumber = $_POST['PhoneNumber'];
   $Email = $_POST['Email'];
   $pmode = $_POST['PaymentMethod'];
   $city = $_POST['City'];
   $state = $_POST['State'];
   $country = $_POST['Country'];
   $pin_code = $_POST['PinCode'];

   $cart_query = mysqli_query($conn, "SELECT * FROM `tbl_cart`");
   $price_total = 0;
   if(mysqli_num_rows($cart_query) > 0){
      while($product_item = mysqli_fetch_assoc($cart_query)){
         $product_name[] = $product_item['product_name'] .' ('. $product_item['quantity'] .') ';
         $product_price = number_format($product_item['unit_price'] * $product_item['quantity']);
        // $price_total += $product_price;
      };
   };

   //$total_product = implode(',',$product_name);
   $detail_query = mysqli_query($conn, "INSERT INTO `user_orders`(UserName, PhoneNumber, Email, pmode,City,State, Country, pin_code, total_products, total_price) VALUES('$UserName','$ PhoneNumber','$Email','$pmode','$city','$state','$country','$pin_code','$total_product','$price_total')") or die('query failed');

   if($cart_query && $detail_query){
      echo "
      <div class='order-message-container'>
      <div class='message-container'>
         <h3>Thank you for shopping!</h3>
         <div class='order-detail'>
            <span>".$total_product."</span>
            <span class='total'> total : $".$price_total."/-  </span>
         </div>
         <div class='customer-details'>
            <p>  name : <span>".$UserName."</span> </p>
            <p>  number : <span>".$PhoneNumber."</span> </p>
            <p>  email : <span>".$Email."</span> </p>
            <p>  address : <span> ".$city.", ".$state.", ".$country." - ".$pin_code."</span> </p>
            <p>  payment mode : <span>".$pmode."</span> </p>
            <p>(pay when product arrives)</p>
         </div>
         
         </div>
      </div>
      ";
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>checkout</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style3.css">
   <link rel="stylesheet" href="style2.css">

</head>
<body>

<?php include 'header.php'; ?>

<div class="container">

<section class="checkout-form">

   <h1 class="heading">complete your order</h1>

   <form action="" method="post">

   <div class="display-order">
      <?php
         $select_cart = mysqli_query($conn, "SELECT * FROM `tbl_cart`");
         $total = 0;
         $grand_total = 0;
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
            $total_price = number_format($fetch_cart['unit_price'] * $fetch_cart['quantity']);
          // echo $grand_total = $total += $total_price;
      ?>
      <span><?= $fetch_cart['product_name']; ?>(<?= $fetch_cart['quantity']; ?>)</span>
      <?php
         }
      }else{
         echo "<div class='display-order'><span>your cart is empty!</span></div>";
      }
      ?>
      <span class="grand-total"> grand total : $.<?= $grand_total; ?></span>
   </div>

      <div class="flex">
         <div class="inputBox">
            <span>your name</span>
            <input type="text" placeholder="enter your name" name="UserName" required>
         </div>
         <div class="inputBox">
            <span>your number</span>
            <input type="number" placeholder="enter your number" name="PhoneNumber" required>
         </div>
         <div class="inputBox">
            <span>your email</span>
            <input type="email" placeholder="enter your email" name="Email" required>
         </div>
         <div class="inputBox">
            <span>payment method</span>
            <select name="PaymentMethod">               
               <option value="m-pesa" selected>m-pesa</option>
               <option value="cash on delivery" >cash on delivery</option>
               <option value="credit cart">credit cart</option>
            </select>
         </div>
         
         <div class="inputBox">
            <span>city</span>
            <input type="text" placeholder="e.g. K'la" name="City" required>
         </div>
         <div class="inputBox">
            <span>state</span>
            <input type="text" placeholder="e.g. Elgon" name="State" required>
         </div>
         <div class="inputBox">
            <span>country</span>
            <input type="text" placeholder="e.g. kenya" name="Country" required>
         </div>
         <div class="inputBox">
            <span>pin code</span>
            <input type="text" placeholder="e.g. 456789" name="PinCode" required>
         </div>
      </div>
      <input type="submit" value="order now" name="order_btn" class="btn-primary">
   </form>

</section>

</div>

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>