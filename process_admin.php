<?php
 require("connect.php");
 
 $UserName=$_POST["UserName"];
 $Email=$_POST["Email"];
 $Password=$_POST["Password"];
 
//echo $UserName;
//echo $Email;
//echo $Password;
 $sql= "INSERT INTO `tbl_admin`( UserName, Email, Password)
 VALUES ('$UserName','$Email','$Password')";
 
 if(mysqli_query($conn,$sql)){
	echo "Login sucessful.";
 }
 else{
	echo "Error: There is a problem, data not inserted".mysqli_error($conn);
 }
 
?>
