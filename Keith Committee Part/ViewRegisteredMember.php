<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name= "viewport" content="width=device-width, initial-scale=1.0"/>
        <title>View Registered Member</title>
    </head>
    <body>
        <h1>View Registered Member</h1>
        <a href="ViewEvent.php">Return</a>
        <a href="#">Home</a><br><br>

        <div>
		<table border="1">
			<thead>
				<th>Member Name</th>
				<th>Phone Number</th>
				<th>Email</th>
				<th>EventName</th>
				<th>Update Member</th>
				<th></th>
			</thead>
			<tbody>
				<?php
					include 'conn.php';

					$evtname=$_GET['Name'];

					$sql=mysqli_query($conn,"select * from eventmembers where EventName LIKE '$evtname'; ");
					while($row=mysqli_fetch_array($sql)){
						?>
						<tr>
							<td><?php echo $row['MemberName']; ?></td>
							<td><?php echo $row['PhoneNumber']; ?></td>
							<td><?php echo $row['Email']; ?></td>
							<td><?php echo $row['EventName']; ?></td>
							<td><a href="EditRegisteredMember.php?ID=<?php echo $row['ID']; ?>">Update</a></td>                  
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
    </body>
</html>