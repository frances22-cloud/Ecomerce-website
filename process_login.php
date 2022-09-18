<?php
 require("connect.php");
 
 $Name=$_POST["Name"];
 $email=$_POST["email"];
 $password=$_POST["password"];
 
//echo $UserName;
//echo $Email;
//echo $Password;
 $sql= "INSERT INTO `user_login`( Name, email, password)
 VALUES ('$Name','$email','$password')";
 
 if(mysqli_query($conn,$sql)){
    echo "Login sucessful.";
 }
 else{
    echo "Error: There is a problem, data not inserted".mysqli_error($conn);
 }
 