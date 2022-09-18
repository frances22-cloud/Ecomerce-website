<!DOCTYPE html>

<html>
<head>
<title>Registration</title>
<link rel="stylesheet" href="style3.css">
</head>
<body>
<img src="Images/logo1.png" alt="Logo" class="logoImg">
    <h1>Registration form</h1>
<form  action="Register_Process.php" method="post">
<label for ="First Name">Enter First Name</label>
<input type="text" id="First Name" name="First_Name"placeholder="Your first Name">
<br><br>
<label for ="Last Name">Enter Last Name</label>
<input type="text" id="Last Name" name="Last_Name" placeholder="Your last Name">
<br><br>
<label for="Useremail">Email:</label>
<input type="Email" id="Email" name="Email": placeholder="Enter Email">
      <p class="image">
      <label for="img">Profile Image</label><br>
      <input type="file" name="user_img" id="img">
      </p>

<label for="pwd">Password:</label>
<input type="Password" id="pwd" name="Password": placeholder="Enter password">
<br><br>
<label for="gnd">GENDER</label><br><br>
 <label for="gender1">Male:</label>
 <input type="radio" id="gender1"name="gender" value="Male"></li><br>
 <label for="gender2">Female:</label>
 <input type="radio" id="gender2"name="gender" value="Female"><br>
  <p>Already have an account?<a href="Login.php">Login here</a><br><br>
 <button type="submit" name="Submit-btn" >Submit</button>
  <a href="index.php">Back</a>

</form>         
</body>

</html>