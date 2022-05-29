<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name= "viewport" content="width=device-width, initial-scale=1.0"/>
        <title>View Event</title>
    </head>
    <body>
        <h1>View Event</h1>
        <a href="#">Return</a>
        <a href="#">Home</a><br>
		<a href="AddMember.php">Add Member</a>
		<br><br>

        <div>
		<table border="1">
			<thead>
				<th>Event Name</th>
				<th>Date</th>
                <th>Time</th>
                <th>Organizing Club</th>
                <th>Venue</th>
                <th>Description</th>
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
                            <td><a href="ViewRegisteredMember.php?Name=<?php echo $row['EventName']; ?>">View Member</a></td>							</td>
						</tr>

						<?php
					}
				?>
			</tbody>
		</table>
	</div>
    </body>
</html>