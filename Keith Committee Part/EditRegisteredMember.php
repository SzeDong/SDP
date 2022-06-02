<?php
    include 'conn.php';

	$ID=$_GET['ID'];
	$sql=mysqli_query($conn,"select * from eventmembers where ID='$ID'");
	$row=mysqli_fetch_array($sql);

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<meta name= "viewport" content="width=device-width, initial-scale=1.0"/>
<title>Update Registered Member</title>
</head>
<body>
	<h1>Update Registered Member</h1>
    <a href="ViewRegisteredMember.php">Return</a>
    <a href="#">Home</a><br><br>

	<form method="POST" action="UpdateRegisteredMember.php?ID=<?php echo $ID; ?>">
        <label for="MemberName">Member Name:</label><br>
        <input type="text" id="MemberName" name="MemberName" value="<?php echo $row['MemberName']; ?>"><br>
        <label for="PhoneNumber">Phone Number:</label><br>
        <input type="int" id="PhoneNumber" name="PhoneNumber" value="<?php echo $row['PhoneNumber']; ?>"><br>
        <label for="Email">Email:</label><br>
        <input type="text" id="Email" name="Email" value="<?php echo $row['Email']; ?>"><br>
        <select name="eventname">
					<option selected disable>-Select-</option>
					<?php
                    $sql=mysqli_query($conn, "SELECT * FROM newevent");
						while($row= mysqli_fetch_array($sql))
						{
					?>
					<option><?php echo $row['EventName'];?></option>
					<?php
					}
					?>
				</select><br>
        <input type="submit" value="Submit">
	</form>
</body>
</html>