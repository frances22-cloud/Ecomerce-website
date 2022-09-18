<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="style3.css">
</head>
<body>

  <h1>SUB-CATEGORY FORM</h1>
  
<form method="post" action="process_subcategory.php">  
      
      <label for="id">  Subcategory id: </label>
      <input type="id" id="id" name="subcategory_id"  placeholder="Add sub category id">
   <br><br>
       <label for="name"> Subcategory name:</label>
	   
	   <select id="Sub_category">
		  <option value="1">Casual</Option>
		  <option value="2">Official</Option>
		  <option value="3">sports</Option>
		  <input type="name" id="name" name="subcategory_name">
		  </select>
          <br><br>
		   <label for="name">Quantity:</label>
		  <select id="Quantity">
		  <option value="1">1</Option>
		  <option value="2">2</Option>
		  <option value="3">3</Option>
		  <option value="3">4</Option>
		  <option value="3">5</Option>
		  <option value="3">6</Option>
		  </select>
          <br><br>
        <label for="id">Category id: </label>
        <input type="id" id="id" name="category_id"><br><br>
        <label for="name">Is deleted:</label>
        
		<select id="is_deleted">
		  <option value="1">1</Option>
		  <option value="2">0</Option>
		  <input type="del" id="del" name="is_deleted">
		  </select><br><br>
       <input type="submit" name="submit" value="Add subcategory" class="btn-secondary"></input>
		
     </form>
</body>

</html>