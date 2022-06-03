<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name= "viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Approve Event</title>
    </head>
    <body>
        <h1>Approve Event</h1>
        <a href="#">Return</a>
        <a href="#">Home</a><br>

        <div>
		<table border="1">
			<thead>
				<th>Event Name</th>
				<th>Event Description</th>
				<th>Time</th>
                <th>Date</th>
                <th>Venue</th>
                <th>Organising Club</th>
				<th>Action</th>
				<th></th>
			</thead>
			<tbody>
				<?php
					include 'conn.php';

					$sql=mysqli_query($conn,"select * from event where Status='Unapproved';");
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
								<a href="approveevent2.php?ID=<?php echo $row['EventID']; ?>">Approve</a>
								<a href="approveevent3.php?ID=<?php echo $row['EventID']; ?>">Unapprove</a>
							</td>

						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
    </body>
</html>