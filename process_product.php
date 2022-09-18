<?php
require("connect.php");
 session_start();
$product_name = $_POST["product_name"];
$product_description = $_POST["product_description"];
$unit_price = $_POST["unit_price"];
$available_quantity = $_POST["available_quantity"];
$category_id = $_POST["category_id"];
$subcategory_id = $_POST["subcategory_id"];
$created_at = $_POST["created_at"];
$updated_at = $_POST["updated_at"];
$added_by = $_POST["added_by"];
$product_image = $_FILES['productImage']['name'];
$product_img_tmp_name = $_FILES['productImage']['tmp_name'];
$product_img_folder = "images/". $product_image;



$sql = "INSERT INTO `tbl_products`(product_name, 
product_description,product_image,unit_price,available_quantity,
 subcategory_id,created_at,updated_at,added_by,category_id,is_deleted) 
 VALUES ('$product_name','$product_description', 
 '$product_img_folder','$unit_price','$available_quantity','$subcategory_id',
 '$created_at', '$updated_at', '$added_by',$category_id,0)";

if(mysqli_query($conn, $sql)) {
	
	echo "New Record inserted successfully";

}else{echo "Error: Record not added".mysqli_error($conn);
}

?>