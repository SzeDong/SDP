<?php
include("conn.php");

?>

<html>
    <head>
        <title>Basketball Club Profile</title>
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
                <h1>WELCOME TO BASKETBALL CLUB</h1>
                <p>Our club provides a fun, and competitive basketball environment. The mission of our club is to educate and empower the members who love Basketball.<br> Members will learn how to dribble, shoot, pass and new abilities to further their knowledge of basketball .
                Feel free to join us if interested!
            </p>
                <a href="joinbasketball.php">
                    <button type="button"><span></span>JOIN NOW</button>
                </a>
            </div>
        </div>
    </section>
    <section class="clubpictures" id="clubpictures">
        <h1>Club Pictures</h1>
        <p>Some Memories in Basketball Club</p>
        <div class="row">
            <div class="clubpic-col">
                <h3>Our Basketball Club Photo</h3>
                <img src="css/basketballphoto.jpg" alt="">
                <p>The Basketball Team represented in the Competition.</p>
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
            $sql = "SELECT * FROM event WHERE OrganisingClub LIKE 'Basketball Club' AND Status = 'Approved'";
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