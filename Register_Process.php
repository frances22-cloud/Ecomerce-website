<?php

//print_r($_POST);
require("connect.php");

//$User_ID=$_POST("User_ID");
$First_Name=$_POST["First_Name"];
$Last_Name=$_POST["Last_Name"];
$Email=$_POST["Email"];
$Password= $_POST["Password"];
$gender=$_POST["gender"];

echo $First_Name;
echo $Last_Name;
echo $Email;
echo $Password;
echo $gender;

$sql = "INSERT INTO `tbl_users` ( First_Name, Last_Name, Email, Password, gender)
VALUES ('$First_Name','$Last_Name','$Email','$password','$gender' )";

 if(mysqli_query($conn,$sql)){
	echo "New record inserted successfully.";
}
else{
	echo "Error: Record not added".mysqli_error($conn);
}
 

?>