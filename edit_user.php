
<?php 
require("connect.php"); 

$ID=$_GET['id'];
$sql="SELECT * FROM tbl_users WHERE User_ID ='$ID'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

$First_Name=$row['First_Name'];
$Last_Name=$row['Last_Name'];

$Email=$row['Email'];
$Password=$row['Password'];
$gender=$row['gender'];

?>

<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
<link rel="stylesheet" href="style3.css">
</head>
<body>

    <h1>Edit User</h1>
<form  action="process_edit.php" method="post">

<input value="<?php echo $ID; ?> "type='hidden' name='id'>

<label for ="First Name">Enter First Name</label>
<input type="text" id="First Name" value=" <?php echo $First_Name;?>" name="First_Name"placeholder="Your first Name">
<br><br>
<label for ="Last Name">Enter Last Name</label>
<input type="text" id="Last Name" value=" <?php echo $Last_Name;?>" name="Last_Name" placeholder="Your last Name">
<br><br>
<label for="Useremail">Email:</label>
<input type="Email" id="Email" value=" <?php echo $Email;?>" name="Email": placeholder="Enter Email">
      <p class="image">
      <label for="img">Profile Image</label><br>
      <input type="file" name="user_img" id="img">
      </p>

<label for="pwd">Password:</label>
<input type="Password" id="pwd" value=" <?php echo $Password;?>" name="Password": placeholder="Enter password">
<br><br>
<label for="gnd">GENDER</label><br><br>
 <label for="gender1">Male:</label>
 <input type="radio" id="gender1" value=" <?php echo $gender;?>" name="gender" value="Male"></li><br>
 <label for="gender2">Female:</label>
 <input type="radio" id="gender2" value=" <?php echo $gender;?>" name="gender" value="Female"><br>
  <p>Already have an account?<a href="Login.php">Login here</a><br><br>
 <button type="submit" name="Submit-btn" >Update</button>
  <a href="index.php">Back</a>

</form>         
</body>

</html>