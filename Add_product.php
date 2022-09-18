
<?php
require("connect.php");
session_start();
$sql1 = "SELECT * FROM tbl_categories";
$all_ctgr = mysqli_query($conn,$sql1);

$sql2 = "SELECT * FROM tbl_subcategories";
$all_SubCtgr = mysqli_query($conn,$sql2);

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style3.css">
</head>

<body>
<form method="post" action="process_product.php" enctype="multipart/form-data">
       
        <h1>PRODUCT FORM</h1><br>
        <fieldset class="fieldset1">
                
                <p> Product Name:
                 <input type="text" name="product_name" placeholder=" Enter Product name">
                </p>
				<p> Product description:
                    <input type="text" name="product_description" placeholder="add Product description">
                </p>
				<p> Product Image:
                  <input type="file" name="product_image" placeholder=" Enter image path">
					
                </p>
                <p> Unit Price:
                    <input type="text" name="unit_price" placeholder=" Enter unit price">
                </p>
				<p> Available quantity:
                    <input type="text" name="available_quantity" placeholder=" Enter quantity here">
                </p>
                <p> Category Id:
                    <input type="text" name="category_id" placeholder="Enter subcategory_id">
                </p>
				<p> subcategory Id:
                    <input type="text" name="subcategory_id" placeholder="Enter subcategory_id">
                </p>
                <p> Created At:
                    <input type="datetime-local" name="created_at" placeholder="created_at">
                </p>
                <p> Updated At:
                    <input type="datetime-local"name="updated_at" placeholder="updated_at">
                </p>
                <p> Added By:
                    <input type="text" name="added_by" placeholder="added_by">
					<input type="text" name="admin_id" id="added_by" required>
                <br>
                </p>
				                       
                <p>
                <input type="submit" class="submit_btn" value="Submit">
                </p>

                <p>ADD SUBCATEGORY : <a href="subcategory.html">subcategory</a></p>
   
               <p><a href="index.php">Back</a></p>
        </div>
            
</form>

</body>


</html>