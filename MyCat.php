
<?php

if(isset($_POST['add_to_cart'])){

    $product_name = $_POST['product_name'];
    $unit_price = $_POST['unit_price'];
    $product_image = $_POST['product_image'];
    $Quantity = 1;
 
    $select_cart = mysqli_query($conn, "SELECT * FROM `tbl_cart` WHERE product_name= '$product_name'");
 
    if(mysqli_num_rows($select_cart) > 0){
       $message[] = 'product already added to cart';
    }else{
       $insert_product = mysqli_query($conn, "INSERT INTO `tbl_cart`(product_name, unit_price, product_image, quantity)
	   VALUES('$product_name', '$unit_price', '$product_image', '$quantity')");
       $message[] = 'product added to cart succesfully';
    }
 
 }


?>

<!DOCTYPE html>
<html>
<head>
<title>Categories</title>
<link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="header">
    </div>
    <div class="container">
        <div class="navbar">
    <div class="logo">
        <img src="images/download.png" width="300px">
    </div>    
    <nav>
        <ul>
   <li><a href="index.php">HOME</a> </li> 
    <li><a href="MyCat.php">PRODUCTS</a></li>
   <li> <a href="Adminpage.php">MORE</a></li>
    <li><a href="Registration.php">REGISTER HERE</a></li>
    <li><a href="login.php">LOGIN</a></li>
    <li><a href="admin.php">ADMIN</a></li>
    <li> <a href="Cart.php">CART</a></li>
   </ul>   
    </nav>
    <img src="Images/logo1.jpg" alt="Logo" class="logoImg" width="30px"
     height="30px">
 </div>
 <div class="row">
    <div class="clo-1">
    <h1> AFFORDABLE DESIGNER<br> OUTFITS</h1>
    <p>OUR MISSION:To be able to create an <br>apparel company that can offer<br> superior design,
  quality and<br> value to the consumer</p>
  </div>
  
    <div class="col-2">
        <!-- Background Image -->
        <img src="Images/home.jpg" alt="backImg" class="backImg" width="2000px" height="1000" >

    </div>
 </div>
    </div>
         <h1>MEN</h1>
    <div class="row">
        <div class=""col-4>
            <img src="images/men2.jpg" width="250px" height="200px">
            <h2>Navy-blue suit</h2>
            <p>Price:$400.00</p>
			<div class="Buttongroup">
            <a href="Buy" class="btn">Buy Now  &#8594;</a>
              <a href="MyCat.php" class="btn">Add to Cart &#8594;</a>
            </div>
        </div>
        <div class=""col-4>
            <img src="images/men3.jpg" width="250px" height="200px" >
            <h2>Sky-blue shirt</h2>
            <p>Price:$100.00</p>
			<div class="Buttongroup">
             <a href="checkout.php" class="btn">Buy Now  &#8594;</a>
              <a href="Cart.php" class="btn">Add to Cart &#8594;</a>
            </div>
        </div>
        <div class=""col-4>
            <img src="images/men.jpg" width="250px" height="200px">
            <h2>Officials</h2>
            <p>Price:$80.00</p>
			<a href="checkout.php" class="btn">Buy Now  &#8594;</a>
              <a href="Cart.php" class="btn">Add to Cart &#8594;</a>
            </div>
        </div>
        
    </div>

</div>
</div>
<div>
<h1>WOMEN</h1>
    <div class="row">
        <div class=""col-4>
            <img src="images/laddies.jpg" width="250px" height="200px">
            <h2>Fashion cotton dresses</h2>
            <p>$900.00</p>
			<div class="Buttongroup">
			<a href="checkout.php" class="btn">Buy Now  &#8594;</a>
              <a href="Cart.php" class="btn">Add to Cart &#8594;</a>
            </div>
        </div>
        <div class=""col-4>
            <img src="images/offers.webp" width="250px" height="200px" >
            <h2>Various collections</h2>
            <p>$100.00</p>
			<div class="Buttongroup">
            <a href="checkout.php" class="btn">Buy Now  &#8594;</a>
              <a href="Cart.php" class="btn">Add to Cart &#8594;</a>
            </div>
        </div>
        <div class=""col-4>
            <img src="images/image3.jpg" width="250px" height="200px">
            <h2>Affordables</h2>
            <p>$80.00</p>
			<div class="Buttongroup">
             <a href="checkout.php" class="btn">Buy Now  &#8594;</a>
              <a href="Cart.php" class="btn">Add to Cart &#8594;</a>
            </div>
        </div>
        
    </div>



<div>
<h1>CHILDREN</h1>
    <div class="row">
        <div class=""col-4>
            <img src="images/floral.jpg" width="250px" height="200px">
            <h2>Flowery dresses</h2>
            <p>Price:$300.00</p>
			 <div class="Buttongroup">
             <a href="Buy" class="btn">Buy Now  &#8594;</a>
              <a href="Cart.php" class="btn">Add to Cart &#8594;</a>
            </div>
        </div>
        <div class=""col-4>
            <img src="images/kids2.png" width="250px" height="200px" >
			<h2>Random choice for kids</h2>
            <p>Price:$250.00</p>
          <div class="Buttongroup">
             <a href="Buy" class="btn">Buy Now  &#8594;</a>
              <a href="Cart.php" class="btn">Add to Cart &#8594;</a>
            </div>
        </div>
        <div class=""col-4>
            <img src="images/kids.jpg" width="250px" height="200px">
            <h2>Navy-blue dress</h2>
            <p>Price:$100.00</p>
			
            <div class="Buttongroup">
             <a href="Buy" class="btn">Buy Now  &#8594;</a>
              <a href="Cart.php" class="btn">Add to Cart &#8594;</a>
            </div>
            </div>
        </div>
        
    </div>

</div>
<div>
</body>

</html>