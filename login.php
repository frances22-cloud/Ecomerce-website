<?php
require("connect.php");
?>
	<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" href="style3.css">
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
    <?php
if(isset($message)){
   foreach($message as $message){
      echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
   }
}
?>
  <!----------------------Login page ---------------------->

     <form action="process_login.php" method="post">
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

<h2>User Login </h2>
	<form  action="process_login.php"method="post">
<label for="uname">User Name:</label>
<input type="text" id="uname" name="Name": placeholder="Enter User Name">
<br><br>
<label for="Useremail">Email:</label>
<input type="email" id="Useremail" name="email": placeholder="Enter email">

<label for="pwd">Password:</label>
<input type="password" id="pwd" name="password": placeholder="Enter password">
<br><br>

<button type="submit" name="User_login" >Login</button>
<br><br>
<div class="pass"><a href="#">Forgot password?</a></div>
<p>Don't have an account? <a href="register.html">SignUp here</a>.</p>
      <a href="Registration.php">Registration</a>


     </form>
 </section>

</body>
</html>