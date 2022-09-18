<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

	<link rel="stylesheet" href="style3.css">
<link rel="stylesheet" href="style2.css">
<title>Admin login page</title>
    </head>
    <body>

    <?php
if(isset($message)){
   foreach($message as $message){
      echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
   }
}
?>

  <!----------------------Login page ---------------------->

     <form action="admin-process-login.php" method="post">

     
        <h2>ADMIN LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

    <label for="uname">UserName:</label>
<input type="text" id="uname" name="UserName": placeholder="Enter User Name">
<br><br>
<label for="Useremail">Email:</label>
<input type="email" id="Useremail" name="Email": placeholder="Enter email">

<label for="pwd">Password:</label>
<input type="password" id="pwd" name="Password": placeholder="Enter password">
<br><br>
<label for="pwd">Confirm password:</label>
<input type="password" id="pwd" name="User_Password": placeholder="Confirm password">
<br><br>
<button type="submit" name="submit" >Login</button>
    <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
            <p>Welcome to <a href="view_orders.php">Vieworders<link rel="stylesheet" href="t_design.css"></a></p>

    

     </form>


</body>
</html>