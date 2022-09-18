<!DOCTYPE HTML>
<html>
<head>
<title>Categories</title>
<link rel="stylesheet" href="style3.css">
</head>
<body>
<!--==== category form=====-->
        <h2> Add Category form</h2><br><br>
<form method="POST" action="process_cat.php">
       <label for="id"> Category-id:</label>
        <input type="id" id="id" name="category_id" placeholder="add category id"><br><br>
   
          <label for="name">Category name:</label>
		   
		  <select id="categories">
		  <option value="1">Men</Option>
		  <option value="2">Women</Option>
		  <option value="3">Children</Option>
		  <input type="name" id="name" name="category_name">
		  </select>
		  <br><br>
       
           <label for="name">Is deleted:</label>
		   
		   <select id="is_deleted">
		   <option value="1">1</Option>
		   <option value="2">0</Option>
		  
		   <input type="name" id="name" name="is_deleted">
		    </select>
		   <br><br>
          <input type="submit" name="submit" value="Add category" class="btn-secondary"></input>
		
          <p>Already have a category? ADD SUBCATEGORY.<a href="Sub_Category.php">HERE</a>.</p>
   
        </form>

</body>

</html>