<?php
 require("connect.php");
 
 $subcategory_id=$_POST["subcategory_id"];
 $subcategory_name=$_POST["subcategory_name"];
 $category_id=$_POST["category_id"];
 $is_deleted=$_POST["is_deleted"];
 
   echo $subcategory_id;
   echo $subcategory_name;
   echo $category_id;
   echo $is_deleted;
$sql = "INSERT INTO `tbl_subcategories` (subcategory_id, subcategory_name,  
category_id, is_deleted)
VALUES ('$subcategory_id','$subcategory_name','$category_id', 'is_deleted' )";

 if(mysqli_query($conn,$sql))
 {
	
	echo "New record inserted successfully.";
	
 }
 else{
	echo "Error: There is a problem, data not inserted".mysqli_error($conn);
 }
 
?>
