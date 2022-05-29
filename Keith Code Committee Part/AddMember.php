<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name= "viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Add Member</title>
    </head>
    <body>
        <h1>Add Member</h1>
        <a href="ViewRegisteredMember.php">Return</a>
        <a href="#">Home</a>
        <br><br>
        <?php
        include 'conn.php';
        $sql=mysqli_query($conn, "SELECT * FROM newevent");
        ?>
        <form action="SaveMember.php" method="post">
        <label for="membername">Member Name:</label><br>
        <input type="text" placeholder="Shin Yuna" id="membername" name="membername" required><br>
        <select name="eventname">
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
    </body>
</html>