<?php
session_start();
require("connect.php");
if (isset($_POST['UserName']) && isset($_POST['Password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['UserName']);
	$Email = validate($_POST['Email']);
	$pass = validate($_POST['Password']);

	if (empty($uname)) {
		header("Location: admin.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: admin.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM tbl_users WHERE Email='$UserName' AND Password='$Password'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['Email'] === $uname && $row['Password'] === $pass) {
            	$_SESSION['Email'] = $row['Email'];
            	$_SESSION['First_Name'] = $row['First_Name'];
            	$_SESSION['UserId'] = $row['UserId'];
            	header("Location:index.php");
		        exit();
            }else{
				header("Location: admin.php?error=Incorrect User name or password");
		        exit();
			}
		}else{
			header("Location: admin.php?error=Incorrect User name or password");
            
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}
?>