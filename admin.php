
<?php

include ('connect.php');

session_start();

if(isset($_POST['submit'])){

   $UserName = $_POST['UserName'];
   $UserName = filter_var($UserName, FILTER_SANITIZE_STRING);
   $Email= $_POST['Email'];
   $Email = filter_var($Email, FILTER_SANITIZE_STRING);
   $Password = sha1($_POST['Password ']);
   $Password = filter_var($Password , FILTER_SANITIZE_STRING);

   $select_admin = $conn->prepare("SELECT * FROM `tbl_admin` WHERE name = ? AND password = ?");
   $select_admin->execute([$name, $pass]);
   $row = $select_admin->fetch(PDO::FETCH_ASSOC);

   if($select_admin->rowCount() > 0){
      $_SESSION['Admin_id'] = $row['Admin_ID'];
      header('location:index.php');
   }else{
      $message[] = 'incorrect username or password!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin login</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <link rel="stylesheet" href="../css/admin_style.css">

</head>
<body>

<?php
   if(isset($message)){
      foreach($message as $message){
         echo '
         <div class="message">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
         ';
      }
   }
?>

<!DOCTYPE HTML>
<html >
<head>
<link rel="stylesheet" href="style3.css">
<link rel="stylesheet" href="style2.css">
<title>Admin login page</title>
</head>
<body>
 <div class="header">
    </div>
    <div class="container">
        <div class="navbar">
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
   
    </div>
 </div>
    </div>
	<h2>Admin Login </h2>
<form  action="process_admin.php"method="post">
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