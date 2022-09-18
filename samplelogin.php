<?php
session_start();

require("connect.php");

if (isset($_POST['Email']) && isset($_POST['Password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['Email']);
	$pass = validate($_POST['Password']);

	if (empty($uname)) {
		header("Location: login.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: login.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM user WHERE Email='$uname' AND Password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['Email'] === $uname && $row['Password'] === $pass) {
            	$_SESSION['Email'] = $row['Email'];
            	$_SESSION['FirstName'] = $row['FirstName'];
            	$_SESSION['UserId'] = $row['UserId'];
            	header("Location: home.php");
		        exit();
            }else{
				header("Location: login.php?error=Incorrect User name or password");
		        exit();
			}
		}else{
			header("Location: login.php?error=Incorrect User name or password");
            
	        exit();
		}
	}
	
}else{
	header("Location: login.php");
	exit();
}
?>