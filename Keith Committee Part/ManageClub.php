<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name= "viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Manage Club</title>
    </head>
    <body>
        <h1>Manage Club</h1>
        <a href="#">Return</a>
        <a href="#">Home</a><br>
        <a href="searchclubname.php">Search Club</a>

        <div>
		<table border="1">
			<thead>
				<th>Club Name</th>
				<th>Club Description</th>
				<th>Club President</th>
                <th>Club Vice President</th>
                <th>Club Phone Number</th>
                <th>Club Email</th>
				<th></th>
			</thead>
			<tbody>
				<?php
					include 'conn.php';

					$sql=mysqli_query($conn,"select * from clubs WHERE Status='Approved'");
					while($row=mysqli_fetch_array($sql)){
						?>
						<tr>
							<td><?php echo $row['ClubName']; ?></td>
							<td><?php echo $row['ClubDescription']; ?></td>
                            <td><?php echo $row['President']; ?></td>
                            <td><?php echo $row['VicePresident']; ?></td>
                            <td><?php echo $row['PhoneNumber']; ?></td>
							<td><?php echo $row['Email']; ?></td>
							<td><a href="EditClub.php?ID=<?php echo $row['ClubID']; ?>">Edit</a></td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
    </body>
</html>