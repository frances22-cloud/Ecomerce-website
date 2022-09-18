<?php

require('connect.php') ;
session_start();
if(isset($_POST['update_update_btn'])){
   $update_value = $_POST['update_quantity'];
   $update_id = $_POST['update_quantity_id'];

  
   $update_quantity_query = mysqli_query($conn, "UPDATE `tbl_cart` SET quantity = '$update_value' WHERE id = '$update_id'");
   if($update_quantity_query){
      header('location:Cart.php');
   };
};

if(isset($_GET['remove'])){
   $remove_id = $_GET['remove'];
   mysqli_query($conn, "DELETE FROM `tbl_cart` WHERE cart_id = '$remove_id'");
   header('location:Cart.php');
};

if(isset($_GET['delete_all'])){
   mysqli_query($conn, "DELETE FROM `tbl_cart`");
   header('location:Cart.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>shopping cart</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="t_design.css">


</head>
<body>

<?php include 'header.php'; ?>
<div class="container">
<section class="shopping-cart">
   <h1 class="heading">shopping cart</h1>

   <table>

      <thead>
         <th>Image</th>
         <th>Name</th>
         <th>Price</th>
         <th>Quantity</th>
         <th>Total price</th>
         <th>Action</th>
      </thead>

      <tbody>

         <?php 
         
 //print_r($_FILES['Images']);
  $conn = mysqli_connect("localhost","root", "", "clothes");
  $sql = "SELECT * FROM tbl_products";
  $result = mysqli_query($conn, $sql);
  
         $select_cart = mysqli_query($conn, "SELECT * FROM `tbl_cart`");
         $grand_total = 0;
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
         ?>
         <tr>
           <td><?php echo '<img src="'.$fetch_cart["product_image"].'" height="110px" width="110px">'; ?></td>
            <td><?php echo $fetch_cart['product_name']; ?></td>
            <td>$<?php echo number_format($fetch_cart['unit_price']); ?>/-</td>
            <td>
               <form action="" method="post">
                  <input type="hidden" name="update_quantity_id"  value="<?php echo $fetch_cart['cart_id']; ?>" >
                  <input type="number" name="update_quantity" min="1"  value="<?php echo $fetch_cart['quantity']; ?>" >
                  <input type="submit" value="update" name="update_update_btn">
               </form>   
            </td>
            <td>$<?php echo $sub_total = number_format($fetch_cart['unit_price'] * $fetch_cart['quantity']); ?>/-</td>
            <td><a href="cart.php?remove=<?php echo $fetch_cart['cart_id']; ?>" onclick="return confirm('remove item from cart?')" class="delete-btn"> <i class="fas fa-trash"></i> remove</a></td>
         </tr>
         <?php
          //$grand_total += $sub_total;  
            };
         };
         ?>
         <tr class="table-bottom">
            <td><a href="products.php" class="option-btn" style="margin-top: 0;">continue shopping</a></td>
            <td colspan="3">grand total</td>
            <td>$<?php echo $grand_total; ?>/-</td>
            <td><a href="Cart.php?delete_all" onclick="return confirm('are you sure you want to delete all?');" class="delete-btn"> <i class="fas fa-trash"></i> delete all </a></td>
         </tr>

      </tbody>

   </table>

   <div class="checkout-btn">
      <a href="checkout.php" class="btn <?= ($grand_total > 1)?'':'disabled'; ?>">procced to checkout</a>
   </div>

</section>

</div>
   
<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>