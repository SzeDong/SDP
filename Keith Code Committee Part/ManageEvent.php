<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name= "viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Manage Event</title>
    </head>
    <body>
        <h1>Manage Event</h1>
        <a href="#">Return</a>
        <a href="#">Home</a><br>
        <a href="CreateEvent.php">Create</a>

        <div>
		<table border="1">
			<thead>
				<th>Event Name</th>
				<th>Description</th>
				<th>Time</th>
				<th>Date</th>
                <th>Venue</th>
                <th>Organizing Club</th>
                
				<th></th>
			</thead>
			<tbody>
				<?php
					include 'conn.php';

					$sql=mysqli_query($conn,"select * from `newevent`");

					while($row=mysqli_fetch_array($sql)){
						?>
						<tr>
							<td><?php echo $row['EventName']; ?></td>
							<td><?php echo $row['EventDescription']; ?></td>
                            <td><?php echo $row['Time']; ?></td>
							<td><?php echo $row['Date']; ?></td>                            
                            <td><?php echo $row['Venue']; ?></td>
							<td><?php echo $row['OrganisingClub']; ?></td>                 
							<td>
								<a href="EditEvent.php?ID=<?php echo $row['EventID']; ?>">Edit</a>
								<a href="DeleteEvent.php?ID=<?php echo $row['EventID']; ?>">Delete</a>
							</td>
							<td><a href="<?php echo $row['RegistrationLink']; ?>" target = "_blank">Register Here</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
    </body>
</html>