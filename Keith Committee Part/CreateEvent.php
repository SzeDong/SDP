<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name= "viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Create Event</title>
    </head>
    <body>
        <h1>Create Event</h1>
        <a href="ManageEvent.php">Return</a>
        <a href="#">Home</a><br><br>

    <form action="SaveEvent.php" method="post">
        <label for="evtname">Event Name:</label><br>
        <input type="text" placeholder="Eg: Twicelights in KL" id="evtname" name="evtname" required><br>
        <label for="desc">Description:</label><br>
        <input type="text" placeholder="Eg: Twice World Tour 2022" id="desc" name="desc" required><br>        
        <label for="evttime">Time:</label><br>
        <input type="time" id="evttime" name="evttime" required><br>
        <label for="evtdate">Date:</label><br>
        <input type="date" id="evtdate" name="evtdate" required><br>
        <label for="venue">Venue:</label><br>
        <input type="text" placeholder="Eg: Axiata Arena" id="venue" name="venue" required><br>
        <label for="orgclub">Organizing Club:</label><br>
        <select name="orgclub">
					<option selected disable>-Select-</option>
					<?php
                    include 'conn.php';
                    $sql=mysqli_query($conn, "SELECT * FROM clubs");
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