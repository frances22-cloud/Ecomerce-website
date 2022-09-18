<?php 
require("connect.php"); ?>

<?php


if(isset($_POST['update_update_btn'])){
   $Quantity = $_POST['Quantity'];
   $CartId = $_POST['CartId'];
   $update_quantity_query = mysqli_query($conn, "UPDATE `tbl_cart` SET product_name = '$product_name' WHERE cart_id = '$cart_id'");
   if($update_quantity_query){
      header('location:Cart.php');
   };
};

if(isset($_GET['remove'])){
   $remove_id = $_GET['remove'];
   mysqli_query($conn, "DELETE FROM `cart_id` WHERE cart_id= '$cart_id'");
   header('location:Cart.php');
};

if(isset($_GET['delete_all'])){
   mysqli_query($conn, "DELETE FROM `tbl_cart`");
   header('location:Cart.php');
}

?>

<html>

    <head>
        <meta charset="utf-8">
	<title>Clothe store</title>
	<link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<link rel="stylesheet" href="style2.css">
  <link rel="stylesheet" type="text/css" href="t_design.css">
    </head>

    <body class="cart-body">

 <div class="main-contents">
     
     <div class="wrappers">
      <br>
     <h1>SHOPPING CART</h1> <br><br>
     </div>

     <!----------------------view shopping cart details----------------->
     <div class="container">

<section class="shopping-cart">

   <table>

      <thead>
           <th>S.N</th>
           <th>Image</th>
            <th>ProductName</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
            <th>Action</th>
      </thead>

      <tbody>

         <?php 
         
         $select_cart = mysqli_query($conn, "SELECT * FROM `tbl_cart`");
         $grand_total = 0;
         $sn = 1;
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
         ?>

         <tr>
             <td> <?php echo $sn++; ?> </td>
           <!-- <td><img src="<?php echo $fetch_cart['product_image']; ?>" width="100" alt=""></td>-->
             <td><?php echo '<img src="'.$fetch_cart["product_image"].'" height="110px" width="110px">'; ?></td>
            <td><?php echo $fetch_cart["product_name"]; ?></td>

            <td>$.<?php echo number_format($fetch_cart["unit_price"]); ?></td>

            <td>
               <form action="" method="post">
                  <input type="hidden" name="cart_id"  value="<?php echo $fetch_cart['cart_id']; ?>" >
                  <input type="number" name="quantity" min="1"  value="<?php echo $fetch_cart['quantity']; ?>" >
                  <input type="submit" value="update" name="update_update_btn" class="btn-primary">
               </form>   
            </td>

            <td>$.<?php echo $sub_total = number_format($fetch_cart['unit_price'] * $fetch_cart['quantity']); ?></td>
            <td><a href="Cart.php?remove=<?php echo $fetch_cart['cart_id']; ?>" onclick="return confirm('remove item from cart?')" class="btn-primary"> </i> remove</a></td>
         </tr>
         <?php
          //echo $grand_total += $sub_total;  
            };
         };
         ?>

         <tr class="table-bottom">
           
            <td colspan="3">grand total</td>
            <td>$.<?php echo $grand_total; ?></td>
            <td><a href="Cart.php?delete_all" onclick="return confirm('are you sure you want to delete all?');" class="btn-primary"> </i> Delete all </a></td>
         </tr>
         
      </tbody>

   </table>

   <div class="checkout-btn">
      <a href="checkout.php" class="btn <?= ($grand_total > 1)?'':'enabled'; ?>">proceed to checkout</a>
       <td><a href="MyCat.php" class="btn" style="margin-top: 0;">continue shopping</a></td>
   </div>

</section>

</div>
 
     </div>
     
 </div>
    </body>
    </html>