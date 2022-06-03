<?php
session_start();
include ('includes/database.php');

$id=$_GET['id'];
$sql = "SELECT * FROM users WHERE id=$id";
$query = mysqli_query($conn, $sql);
$row=mysqli_fetch_array($query);


?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<meta name= "viewport" content="width=device-width, initial-scale=1.0"/>
<title>Edit Profile</title>
</head>
<body>
	<h1>Edit Profile</h1>
    <a href="userProfile.php"class="btn btn-success">Return</a>

	<form action="functions/updateProfile.php" method="POST">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" value="<?php echo $row['username']; ?>"><br>

		<label for="password">Password:</label><br>
        <input type="password" id="password" name="password" value="<?php echo $row['password']; ?>"><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>"><br>

        <input type="hidden" name="id" value="<?php echo $id; ?>"><br>
		<button type="submit" name="editProfile" class="btn btn-success">Submit</button>
	</form>
</body>
</html>