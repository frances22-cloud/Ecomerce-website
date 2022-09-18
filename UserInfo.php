<?php
  $conn = mysqli_connect("localhost","root", "", "clothes");
  $sql = "SELECT * FROM tbl_users";
  $result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style2.css">
  <link rel="stylesheet" type="text/css" href="t_design.css">
</head>
<body>
  <table>
    <h1>List of Users</h1>
    <thead>
      <tr>
        <th> ID</th>
        <th>First_Name</th>
        <th>Last_Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>gender</th>
		<th colspan='2'>Actions</th>
		
    </tr>
    </thead>
    <?php
      if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)){
    ?>
    <tbody>
      <tr>
        <td><?php echo $row['User_ID']; ?></td>
        <td><?php echo $row['First_Name']; ?></td>
        <td><?php echo $row['Last_Name']; ?></td>
        <td><?php echo $row['Email']; ?></td>
		<td><?php echo $row['Password']; ?></td>
        <td><?php echo $row['gender']; ?></td>
        <td>
		<br><br>
     <a href="edit_user.php?id=<?php echo $row['User_ID']; ?>" class="btn-edit"> </i> update </a>
    </tr>
    </tbody>
    <?php
     }
   };
    ?>
  </table>
</body>
</html>