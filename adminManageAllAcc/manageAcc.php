<?php
    require "conn.php";
$result = mysqli_query($conn,"SELECT * FROM users");
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Delete Account data</title>
</head>
<body>
        <a href="#">Home</a>
<table border='1'> 
	<tr>
	<td>Role</td>
	<td>Username</td>
	<td>Password</td>
	<td>Email</td>
	<td>Action</td>
	</tr>
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>
	<tr class="<?php if(isset($classname)) echo $classname;?>">
	<td><?php echo $row["role"]; ?></td>
	<td><?php echo $row["username"]; ?></td>
	<td><?php echo $row["password"]; ?></td>
	<td><?php echo $row["email"]; ?></td>
	<td>
		<a href="delete-process.php?id=<?php echo $row["id"]; ?>">Delete</a>
    	<a href="updateAcc-process.php?id=<?php echo $row["id"]; ?>">Update</a>
	</td>
	</tr>
	<?php
	$i++;
	}
	?>
</table>
</body>
</html>