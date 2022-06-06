<?php
include("conn.php");

?>

<html>
    <head>
        <title>Student Council Club Profile</title>
        <link rel="stylesheet" href="css/club.css">
    </head>
    <body>
        <section class="header">
            <div class="navbar">
                <img src="css/bkb2.jpg" class="logo">
                <ul>
                    <li><a href="hp.html">Home</a></li>
                    <li><a href="badclub.php">Badminton</a></li>
                    <li><a href="bkbclub.php">Basketball</a></li>
                    <li><a href="danclub.php">Dancing</a></li>
                    <li><a href="medclub.php">Media</a></li>
                    <li><a href="orcclub.php">Orchestra</a></li>
                    <li><a href="stuclub.php">Student Council</a></li></li>
                </ul>
            </div>
            <div class="content">
                <h1>WELCOME TO STUDENT COUNCIL CLUB</h1>
                <p>The purpose of the student council club is to give the members an opportunity to develop leadership by organizing and carrying out school activities and service projects.
                    <br>Feel free to join us if interested!
                </p>
                <a href="#clubpictures">
                    <button type="button"><span></span>LEARN MORE</button>
                </a>
            </div>
        </div>
    </section>
    <section class="clubpictures" id="clubpictures">
        <h1>Club Pictures</h1>
        <p>Some Memories in Student Council Club</p>
        <div class="row">
            <div class="clubpic-col">
                <h3>Our Student Council Club Photo</h3>
                <img src="css/basketballphoto.jpg" alt="">
                <p>The Student Council Team represented in the Competition.</p>
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
            $sql = "SELECT * FROM event WHERE OrganisingClub LIKE 'Student Council Club' AND Status = 'Approved'";
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