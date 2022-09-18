
<?php
require("connect.php");
if(!isset($_SESSION))
{
    session_start();
}
?>
<!DOCTYPE html
<html>
 <head>
    <meta charset="UTF-8">
 <title> Clothes </title>
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
    <li><a href="products.php">PRODUCTS</a></li>
   <li> <a href="Adminpage.php">MORE</a></li>
    <li><a href="Registration.php">REGISTER HERE</a></li>
    <li><a href="login.php">LOGIN</a></li>
    <li><a href="admin.php">ADMIN</a></li>
	<li> <a href="Cart.php">CART</a></li>
    <li> <a href="view_orders.php">ORDERS</a></li>
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
<!.......Featured categories......>
<h1 class="title">Featured categories</h1>
   <div class="Categories">
    <div class="small-container">
        <div class="row">
        <div class="col-3">
            <img src="images/download2.jpg" class="Offer-img" width="300px" height="300px" >
			<h2><a href="Mycat.php">Men's collection</h2></a>
        </div>
        <div class="col-3">
            <img src="images/child.jpg" width="300px" height="300px">
			<h2><a href="Mycat.php">Children's collection</h2></a>
        </div>
		
        <div class="col-3">
            <img src="images/more2.jpg" width="300px" height="300px" >
			<h2><a href="Mycat.php">Women's collection</h2></a>
    </div>
    
        </div>
    </div>
   </div> 
   <!......Featured products.......>
    <div class="small-container"></div>
    <h1 class="title">Featured products</h1>
    <div class="row">
        <div class=""col-4>
            <img src="images/cool.jpg" width="200px" height="100px">
           <h2><a href="Mycat.php">Women</h2></a>
            <p>Price:$400.00</p>
        </div>
        <div class=""col-4>
            <img src="images/ours.jpg" width="200px" height="100px" >
            <h2><a href="Mycat.php">Men</h2></a>
            <p>Price:$100.00</p>
        </div>
        <div class=""col-4>
            <img src="images/kids2.png" width="200px" height="100px">
            <h2><a href="Mycat.php">Children</h2></a>
            <p>Price:$80.00</p>
        </div>
        
    </div>
	<!...offers.....>
	<section class="specials">
        <div class="title">
            <h2>This Week's  Specials</h2>
          
        <<div class="row">
        <div class=""col-4>
            <img src="images/beauty.jpg" width="200px" height="100px">
             <h2><a href="Mycat.php">Women's section secstion</h2></a>
           <p><big>WAS</big> <span>$.<del>400</del></span> <big>NOW</big> <span>$.200</span></p>
		   <a href="" class="btn">Buy Now &#8594;</a>
        </div>
        <div class=""col-4>
            <img src="images/child.jpg" width="250px" height="200px" >
            <h2><a href="Mycat.php">Children's section specials</h2></a>
           <p><big>WAS</big> <span>$.<del>100</del></span> <big>NOW</big> <span>$.80</span></p>
		   <a href="" class="btn">Buy Now &#8594;</a>
        </div>
        <div class=""col-4>
            <img src="images/casual.jpg" width="250px" height="200px">
            <h2><a href="Mycat.php">Men's section specials</h2></a>
           <p><big>WAS</big> <span>$.<del>300</del></span> <big>NOW</big> <span>$.220</span></p>
		   <a href="Registration.php" class="btn">Buy Now &#8594;</a>
        </div>
        
    </div>
    </section>

	
	</div>
	<div class="column-1">
 <h3> <a href="Trial">START A FREE TRIAL PERIOD OF<br> TIME MARKETING WITH US</a></h3>
 <a href="MyCart.php" class="btn">Sart now</a><br>
 <label for="">Subscribe to our news letter here:</label>
  <input type="email" name="subscriber-email" placeholder="Enter Email">
          <button>  <a id="button" href="#">SUBMIT</a></button>
 
 </div>
 
	</div>
	<!....Testimonial....>
	<div class="testimonial">
	<h1 class="title">Testimonials</h1>
	<div class="small-container">
	<div class="row">
	<div class="col-3">
	<img src="Images/img2.jpg" alt="User Image" width="300" height="200">
	 <p> I recently bought an oufit from <br>affordable designer outfits and <br>am absolutely 
 in love with it.<br> It's a great fabric and hangs just right.<br>
 Now I wished I had bought one in every colour. FRANK NYONG</p>
	</div>
	<div class="col-3">
	<img src="Images/ours.jpg" alt="User Image" width="300" height="200">
	<p>I am so happy with this outfit!<br> It is exactly what I wanted.
 It is super soft,<br> generous sizing, great price and <br>so cosy and 
  totally comfortable. KEYLA </p>
  
	</div>
	<div class="col-3">
	<img src="Images/elegant.jpg" alt="User Image" width="300" height="200">
	<p>If you need a relaible<br> website please consider <br>AFFORDABLE DESIGNER OUTFITS.
  <br> They are very professional and thorough. DAVIS JANE</p>
  
	</div>
	</div>
	<!.....footer.....>
	<div class="footer">
	<div class="container">
	<div class="row">
	<div class="footer-col-2">
	<h3>Download our App</h3>
	<p>Download App for Android and ios mobile phone</p>

	</div>
	<div class="col-3">
	<h3>Useful links</h3>
	<ul><li><a href="#">Return policy</a></li>
    <li><a href="#">Newsletter</a></li>
     <li><a href="#">Featured products</a></li>
     <li><a href="#">Join affiliate</a></li>
  
	</ul>
	</div>
	<div class="col-3">
	<h3>Follow us</h3>
	<ul>
	<li>Facebook<li>
	<li>Twitter</li>
	<li>Instagram</li>
	<li>Youtube</li>
	
	</ul>
	</div>
	</div>
	</div>
</body>
 </html>