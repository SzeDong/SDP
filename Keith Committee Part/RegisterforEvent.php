<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name= "viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Register for Event</title>
    </head>
    <body>
        <h1>Register to join Event</h1>
        <a href="#">Return</a>
        <a href="#">Home</a>
		<h2>Available Events</h2>
		<div>
			<table border="1">
				<thead>
					<th>Event Name</th>
					<th>EventDescription</th>
					<th>Time</th>
					<th>Date</th>
					<th>Venue</th>
					<th>Organising Club</th>
					<th></th>
				</thead>
				<tbody>
					<?php
						include 'conn.php';

						$sql=mysqli_query($conn,"select * from `event` WHERE Status='Approved'");
						while($row=mysqli_fetch_array($sql)){
					?>
						<tr>
						<td><?php echo $row['EventName']; ?></td>							
						<td><?php echo $row['EventDescription']; ?></td>
						<td><?php echo $row['Time']; ?></td>
						<td><?php echo $row['Date']; ?></td>
						<td><?php echo $row['Venue']; ?></td>  
						<td><?php echo $row['OrganisingClub']; ?></td>
						</tr>

					<?php
						}
					?>
				</tbody>
			</table>
		</div><br><br>

		<h2>Enter Info to Join Event</h2>

		<div>
			<?php
				include 'conn.php';
				$sql=mysqli_query($conn, "SELECT * FROM event WHERE Status='Approved'");
			?>
			<form action="SaveMember.php" method="post">
				<label for="membername">Member Name:</label><br>
				<input type="text" placeholder="Shin Yuna" id="membername" name="membername" required><br>
				<label for="phonenum">Phone Number:</label><br>
				<input type="int" placeholder="0112092003" id="phonenum" name="phonenum" required><br>
				<label for="email">Email:</label><br>
				<input type="text" placeholder="yuna@itzy.com" id="email" name="email" required><br>
				<select name="eventname">
					<option selected disable>-Select-</option>
					<?php
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
		</div>
    </body>
</html>