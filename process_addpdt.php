<?php 
require("connect.php");
session_start();
$product_id = $_POST['product_id'];
$product_name = $_POST['product_name'];
$product_description = $_POST['product_description'];
$product_image = $_POST['product_image'];
$unit_price = $_POST['unit_price'];
$available_quantity = $_POST['available_quantity'];
$subcategory_id = $_POST['subcategory_id'];
$created_at = $_POST['created_at'];
$updated_at = $_POST['updated_at'];
$added_by = $_POST['added_by'];
$is_deleted = $_POST['is_deleted'];

$sql = "INSERT INTO tbl_products(product_id, product_name, 
product_description, product_image, unit_price, available_quantity,
 subcategory_id, created_at, updated_at, added_by, is_deleted) 
 VALUES ('$product_id', '$product_name', '$product_description', 
 '$product_image', '$unit_price',  '$subcategory_id', 
 '$created_at', '$available_quantity', '$updated_at', '$added_by', $is_deleted)";

if (mysqli_query($conn, $sql)) {
	
	echo "New Record inserted successfully";

}else{echo "Error: Record not added".mysqli_error($conn);}

?>