<?php
  //print_r($_FILES['images']);
  $conn = mysqli_connect("localhost","root", "", "clothes");
  $sql = "SELECT * FROM tbl_products";
  $result = mysqli_query($conn, $sql);


if(isset($_GET['remove'])){
   $remove_id = $_GET['remove'];
   mysqli_query($conn, "DELETE FROM `cart_id` WHERE cart_id= '$cart_id'");
   header('location:addproducttbl.php');
};
if(isset($_GET['edit'])){
   $product_id = $_GET['edit'];
   mysqli_query($conn, "EDIT FROM `product_id` WHERE produc_id= '$produc_id'");
   header('location:addproducttbl.php');
};

if(isset($_GET['delete_all'])){
   mysqli_query($conn, "DELETE FROM `tbl_products`");
   header('location:addproducttbl.php');
}

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
		<th colspan='9'><h1>Add products</h1></th>
	</tr>
    
      <tr>
	      <th>Product Image</th>
        <th>Product Id</th>
        <th>Name</th>
        <th>Description</th>
        <th>Unit Price</th>
        <th>Stock</th>
        <th>Subcategory Id</th>
		<th colspan='2'>Actions</th>
		
		
    </tr>
    </thead>
    <?php
      if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)){
    ?>
    <tbody>
      <tr>
	  <td><?php echo '<img src="'.$row["product_image"].'" alt="" height="110px" width="110px">'; ?></td>
        <td><?php echo $row["product_id"]; ?></td>
        <td><?php echo $row["product_name"]; ?></td>
        <td><?php echo $row["product_description"]; ?></td>
		<td><?php echo $row["unit_price"]; ?></td>
		<td><?php echo $row["available_quantity"]; ?></td>
        <td><?php echo $row["subcategory_id"]; ?></td>
        <td><a href="addproducttbl.php?" onclick="return confirm('are you sure you want to edit this product?');" class="edit-btn"> <i class="edit-btn"></i> Edit </a></td>
     <td><a href="addproducttbl.php?delete_all" onclick="return confirm('are you sure you want to delete this??');" class="delete-btn"> <i class="fas fa-trash"></i> delete all </a></td>
    </tr>
    </tbody>
    <?php
     }
   };
    ?>
  </table>
</body>
</html>