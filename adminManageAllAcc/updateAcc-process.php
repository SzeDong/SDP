<?php
    require "conn.php";
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE users set id='" . $_POST['id'] . "', role='" . $_POST['role'] . "', username='" . $_POST['username'] . "', password='" . $_POST['password'] . "' ,email ='" . $_POST['email'] . "' WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM users WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Member Data</title>
</head>
<body>
    <a href="manageAcc.php">Return</a>
    <a href="#">Home</a>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a> Member List  </a>
</div>
ID : <br>
<input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
<input type="text" name="id"  value="<?php echo $row['id']; ?>">
<br>
Role : <br>
<input type="text" name="role" class="txtField" value="<?php echo $row['role']; ?>">
<br>
Username : <br>
<input type="text" name="username" class="txtField" value="<?php echo $row['username']; ?>">
<br>
Password :<br>
<input type="text" name="password" class="txtField" value="<?php echo $row['password']; ?>">
<br>
Account Type :<br>
<input type="text" name="email" class="txtField" value="<?php echo $row['email']; ?>">
<br>
<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</html>