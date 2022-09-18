<?php

require('connect.php') ;
session_start();

if(isset($_POST['add_to_cart'])){
   //$product_image =$_POST['product_image'];
   $product_name = $_POST['product_name'];
   $product_price=$_POST['product_price'];
   $quantity = 1;
   $select_cart = mysqli_query($conn, "SELECT * FROM `tbl_cart` WHERE product_name = '$product_name'");

   if(mysqli_num_rows($select_cart) > 0){
      $message[] = 'product already added to cart';
   }else{
      $insert_product = mysqli_query($conn, "INSERT INTO `tbl_cart`(product_name, unit_price,  quantity) VALUES('$product_name', '$product_price',  '$quantity')");
      $message[] = 'product added to cart succesfully';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>products</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style2.css">
   <link rel="stylesheet" href="t_design.css">
   <link rel="stylesheet" href="stylecart.css">
</head>
<body>
   
<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>

<?php include 'header.php'; ?>

<div class="container">

<section class="products">

   <h1 class="heading">Cart items! </h1>

   <div class="box-container">

      <?php
      
      $select_products = mysqli_query($conn, "SELECT * FROM `tbl_products`");
      if(mysqli_num_rows($select_products) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_products)){
      ?>

      <form action="" method="post">
         <div class="box">
            <img src="<?php echo $fetch_product['product_image']; ?>" alt="" width="150px" height="150px">
            <h3><?php echo $fetch_product['product_name']; ?></h3>
            <div class="unit_price">$<?php echo $fetch_product['unit_price']; ?>/-</div>
            <input type="hidden" name="product_name" value="<?php echo $fetch_product['product_name']; ?>">
            <input type="hidden" name="product_price" value="<?php echo $fetch_product['unit_price']; ?>">
            <!--<input type="File" name="Images" value="<?php echo $fetch_product['product_image']; ?>">-->
            <input type="submit" class="btn" value="add to cart" name="add_to_cart">
         </div>
      </form>

      <?php
         };
      };
      ?>

   </div>

</section>

</div>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>