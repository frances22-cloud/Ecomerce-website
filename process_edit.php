<?php
require('connect.php'); 

if (isset($_POST)) {
    $id = $_POST['id'];

    $First_Name=$_POST['First_Name'];
    $Last_Name=$_POST['Last_Name'];
    $Email=$_POST['Email'];
    $Password=$_POST['Password'];
    $gender=$_POST['gender'];


    $update_data = "UPDATE tbl_users SET First_Name='$First_Name' ,Last_Name='$Last_Name',Email='$Email',Password='$Password',$gender='$gender' WHERE User_ID ='$id'";

    if (mysqli_query($conn, $update_data)) {
        echo "Record updated successfully" . "<br/>";
        // header("location:viewuser.php");
    } else {

        echo "Error:" . $sql . "<br/>" . mysqli_error($conn);
        // header("location:view users.php");
    }
}
?>