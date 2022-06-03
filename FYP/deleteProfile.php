<?php
session_start();
include ('includes/database.php');

$id=$_SESSION['id'];
$sql = "SELECT * FROM users WHERE id=$id";
$query = mysqli_query($conn, $sql);
$row=mysqli_fetch_array($query);


?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<meta name= "viewport" content="width=device-width, initial-scale=1.0"/>
<title>Delete Profile</title>
</head>
<body>
	<h1>Delete Profile</h1>
    <a href="userProfile.php"class="btn btn-primary">Return</a>

	<form action="functions/delete_user.php" method="POST">
        <label>ID</label>
		<input type="text" id="id" name="id" value="<?php echo $row['id'] ?>" disabled>

		<label>Role</label>
		<input type="text" id="role" name="role" value="<?php echo $row['role'] ?>" disabled>

		<label>Username</label>
		<input type="text" id="username" name="username" value="<?php echo $row['username'] ?>" disabled>

		<label>Passoword</label>
		<input type="text" id="password" name="password" value="<?php echo $row['password'] ?>" disabled>

		<label>Email</label>
		<input type="email" id="email" name="email" value="<?php echo $row['email'] ?>" disabled>

        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
		<button type="submit" name="delete_user" class="btn btn-success">Delete</button>
	</form>
</body>
</html>