<?php
    include 'conn.php';

	$ID=$_GET['ID'];
	$sql=mysqli_query($conn,"select * from `clubs` where ClubID='$ID'");
	$row=mysqli_fetch_array($sql);

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<meta name= "viewport" content="width=device-width, initial-scale=1.0"/>
<title>Edit Club</title>
</head>
<body>
	<h1>Edit Club</h1>
    <a href="ManageClub.php">Return</a>
    <a href="#">Home</a><br><br>

	<form method="POST" action="UpdateClub.php?ID=<?php echo $ID; ?>">
        <label for="ClubName">Club Name:</label><br>
        <input type="text" id="ClubName" name="ClubName" value="<?php echo $row['ClubName']; ?>"><br>
		<label for="ClubDescription">Description:</label><br>
        <input type="text" id="ClubDescription" name="ClubDescription" value="<?php echo $row['ClubDescription']; ?>"><br>
        <label for="President">President:</label><br>
        <input type="text" id="President" name="President" value="<?php echo $row['President']; ?>"><br>
        <label for="VicePresident">Vice President:</label><br>
        <input type="text" id="VicePresident" name="VicePresident" value="<?php echo $row['VicePresident']; ?>"><br>
        <label for="PhoneNumber">Phone Number:</label><br>
        <input type="int" id="PhoneNumber" name="PhoneNumber" value="<?php echo $row['PhoneNumber']; ?>"><br>
        <label for="Email">Email:</label><br>
        <input type="text" id="Email" name="Email" value="<?php echo $row['Email']; ?>"><br>
		<input type="submit" value="submit">
	</form>
</body>
</html>