<?php
include("conn.php");

?>

<html>
    <head>
        <title>Orchestra Club Profile</title>
        <link rel="stylesheet" href="css/club.css">
    </head>
    <body>
        <section class="header">
            <div class="navbar">
                <img src="css/bkb2.jpg" class="logo">
                <ul>
                    <li><a href="hpmember.html">Home</a></li>
                    <li><a href="badclubmember.php">Badminton</a></li>
                    <li><a href="bkbclubmember.php">Basketball</a></li>
                    <li><a href="danclubmember.php">Dancing</a></li>
                    <li><a href="medclubmember.php">Media</a></li>
                    <li><a href="orcclubmember.php">Orchestra</a></li>
                    <li><a href="stuclubmember.php">Student Council</a></li></li>
                </ul>
            </div>
            <div class="content">
                <h1>WELCOME TO ORCHESTRA CLUB</h1>
                <p>
                    Our club is a fun club for people to has passion for music. Anyone who plays a musical instrument or would like to learn is welcome to join. Besides that, we will be having performances twice a year.
                    Orchestra is a chance for the members to learn how to read, write and perform music. Members from all grade levels are welcome and do not need to have a background playing instruments. Anywhere from beginner to advanced is perfectly fine.
                    Feel free to join us if interested!
                </p>
                <a href="joinorchestra.php">
                    <button type="button"><span></span>JOIN NOW</button>
                </a>
            </div>
        </div>
    </section>
    <section class="clubpictures" id="clubpictures">
        <h1>Club Pictures</h1>
        <p>Some Memories in Orchestra Club</p>
        <div class="row">
            <div class="clubpic-col">
                <h3>Our Orchestra Club Photo</h3>
                <img src="css/basketballphoto.jpg" alt="">
                <p>The Orchestra represented in the Concert.</p>
            </div>
            <div class="clubpic-col">
                <h3>Hierachy Chart Photo</h3>
                <img src="css/basketballclub_hierarchy.jpg" alt="">
                <p>Our Members who are responsible of leading the club.</p>
            </div>
        </div>
    </section>
    <section class="Upcoming-events">
        <h1>Upcoming Events</h1>
        <table>
            <tr>
                <th>Event Name</th>
                <th>Event Description</th>
                <th>Time</th>
                <th>Date</th>
                <th>Venue</th>
            </tr>
            <?php
            $sql = "SELECT * FROM event WHERE OrganisingClub LIKE 'Orchestra Club' AND Status = 'Approved'";
            $result = $conn->query($sql);
                        
            while($data = $result->fetch_assoc()){
                echo ("<tr>");
                echo ("<td>" . $data['EventName'] . "</td>");
                echo ("<td>" . $data['EventDescription'] . "</td>");
                echo ("<td>" . $data['Time'] . "</td>");
                echo ("<td>" . $data['Date'] . "</td>");
                echo ("<td>" . $data['Venue'] . "</td>");
                echo ("</tr>");}
            ?>
        </section>
        </div>
    </body>
</html>