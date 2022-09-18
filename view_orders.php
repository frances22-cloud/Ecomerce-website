<?php
  //print_r($_FILES['images']);
  $conn = mysqli_connect("localhost","root", "", "clothes");
  $sql = "SELECT * FROM user_orders";
  $result = mysqli_query($conn, $sql);
  
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style2.css">
  <link rel="stylesheet" type="text/css" href="t_design.css">
 
</head>
<body>
  <table>
  <thead>
  <tr>
    <th colspan='9'><h1>Views Orders</h1></th>
  </tr>
      <tr>
        <th>S/N</th>
        <!---<th>Image</th>-->
        <th>Name</th>
        <th>Tel.</th>
        <th>Order date</th>
        <th>Amount</th>
        <th>Payment method</th>
        <th>Total product</th>
        <th>Total price</th>
    <th colspan='2'>Actions</th>
    </tr>
    </thead>
    <?php
      if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)){
    ?>
    <tbody>
      <tr>
        <td><?php echo $row["Order_id"]; ?></td>
        <!--<td><?php echo'<img src="'.$row["product_image"].'" alt="" height="110px" width="110px">'; ?></td>-->
        <td><?php echo $row["UserName"]; ?></td>
        <td><?php echo $row["PhoneNumber"]; ?></td>
    <td><?php echo $row["Order_date"]; ?></td>
    <td><?php echo $row["Amountpaid"]; ?></td>
        <td><?php echo $row["pmode"]; ?></td>
        <td><?php echo $row["total_products"]; ?></td>
        <td><?php echo $row["total_price"]; ?></td>
        <td>
      <td><a href="view_orders.php?" onclick="return confirm('are you sure you want to edit this?');" class="edit-btn"> <i class="fas fa-trash"></i> Edit </a></td>
    </tr>
    </tbody>
    <?php
     }
   };
    ?>
  </table>
</body>
</html>