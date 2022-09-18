<!DOCTPYE TYPE>
<html>
<head>
<title>Add category</title>
<link rel="stylesheet" href="style3.css">
</head>
<body>
<h1>Add category</h1>
<form action="" method="post" enctype="multipart-data">
<table class="tbl-30">
<tr>
<td>
<label for="addcat">Category_Name</label>
<input type="text" name="title" placeholder+="Category name"></input>
</td>
</tr>
<tr>
<td>Select image:</td>
<td>
<input type="file" name="image">
</td>
</tr>
<tr>
<td>Featured:</td>
<td>
<input type="radio" name="featured" value="yes">Yes</input>
<input type="radio" name="featured" value="No">No</input>
</td>
</tr>
<tr>
<td>Active:</td>
<td>
<input type="radio" name="Active" value="yes">Yes</input>
<input type="radio" name="Active" value="No">No</input>
</td>
</tr>
<tr>
<td colspan ="2">
<input type="submit" name="submit" value="Add category" class="btn-secondary"></input>
</td>
</tr>

</table>
</form>
<?php
if(isset($_POST['submit']));
$title=$_POST['title'];
?>
</body>
</html>
