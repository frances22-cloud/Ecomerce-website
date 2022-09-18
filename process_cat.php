<?php 

require("connect.php");
session_start();
  $category_id=$_POST["category_id"];
  $category_name = $_POST["category_name"];
  $is_deleted=$_POST["is_deleted"];
  //echo $category_id;
  //echo $category_name;
  //echo $is_deleted;
  
$sql = "INSERT INTO `tbl_categories`(category_id, category_name, is_deleted ) 
 VALUES ('$category_id', '$category_name', '$is_deleted')";

  if(mysqli_query($conn,$sql))
  {
	echo "New Record inserted successfully";
	
  }
  else{
  echo "Error: Record not added".mysqli_error($conn);
}

?>