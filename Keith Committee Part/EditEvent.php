<?php
    include 'conn.php';

	$EventID=$_GET['ID'];
	$sql=mysqli_query($conn,"select * from `event` where EventID='$EventID'");
	$row=mysqli_fetch_array($sql);

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<meta name= "viewport" content="width=device-width, initial-scale=1.0"/>
<title>Edit Event</title>
</head>
<body>
	<h1>Edit Event</h1>
    <a href="ManageEvent.php">Return</a>
    <a href="#">Home</a><br><br>

	<form method="POST" action="UpdateEvent.php?ID=<?php echo $EventID; ?>">
        <label for="evtname">Event Name:</label><br>
        <input type="text" id="evtname" name="evtname" value="<?php echo $row['EventName']; ?>"><br>
        <label for="desc">Description:</label><br>
        <input type="text" id="desc" name="desc" value="<?php echo $row['EventDescription']; ?>"><br>        
        <label for="evttime">Time:</label><br>
        <input type="time" id="evttime" name="evttime" value="<?php echo $row['Time']; ?>"><br>
        <label for="evtdate">Date:</label><br>
        <input type="date" id="evtdate" name="evtdate" value="<?php echo $row['Date']; ?>"><br>
        <label for="venue">Venue:</label><br>
        <input type="text" id="venue" name="venue" value="<?php echo $row['Venue']; ?>"><br>
        <label for="orgclub">Organising Club:</label><br>
        <select name="orgclub">
					<option selected disable>-Select-</option>
					<?php
                    include 'conn.php';
                    $sql=mysqli_query($conn, "SELECT * FROM clubs WHERE Status='Approved'");
						while($row= mysqli_fetch_array($sql))
						{
					?>
					<option><?php echo $row['ClubName'];?></option>
					<?php
					}
					?>
				</select><br>
        <input type="submit" value="Submit">
	</form>
</body>
</html>