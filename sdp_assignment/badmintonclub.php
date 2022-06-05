<?php
include("conn.php");
?>

<!DOCTYPE html>
<html>
    <style>
    table, td, th {  
    border: 1px solid #ddd;
    text-align: left;
    }

    th, td {
    padding: 15px;
    }
    </style>

    <head>
        <title>Badminton Club</title>
    </head>
<body>
    <div class = "otherclubname">
        <ul>
        <li><a href="badmintonclub.php">Badminton Club</a></li>
        <li><a href="basketballclub.php">Basketball Club</a></li>
        <li><a href="dancingclub.php">Dancing Club</a></li>
        <li><a href="mediaclub.php">Media Club</a></li>
        <li><a href="orchestraclub.php">Orchestra Club</a></li>
        <li><a href="studentcouncilclub.php">Student Council Club</a></li>
        </ul>
    </div>
    <h1>
        Welcome to Badminton Club! Come and join us!
    </h1>
    <div class = "clubinformation">
        <ul>
        <li><a href="#badmintoncdescrip">Our Description</a></li>    
        <li><a href="#badmintoncevent">Upcoming Event</a></li>
        <li><a href="#badmintoncphotos">Badminton Club Photos</a></li>
        <li><a href="#badmintonchierarchy">Club Hierarchy</a></li>
        </ul>
    </div>
    <h2 id="badmintoncdescrip"> Badminton Club Description </h2>
    <p>
        The Badminton Club was created for students to explore, practice and compete in the sport of badminton. Our club provides a fun, and competitive badminton environment.
        Our mission of our club is to provide the opportunity to the members to develop and improve their badminton skils.  Feel free to join us if interested!
    </p> 

    <h2 id="badmintoncevent"> Upcoming Event </h2>
    <table>
    <tr>
        <th>Event Name</th>
        <th>Event Description</th>
        <th>Time</th>
        <th>Date</th>
        <th>Venue</th>
    </tr>
    <?php
    $sql = "SELECT * FROM event WHERE OrganisingClub LIKE 'Badminton Club' AND Status = 'Approved'";
    $result = $con->query($sql);
    
    while($data = $result->fetch_assoc()){
        echo ("<tr>");
        echo ("<td>" . $data['EventName'] . "</td>");
        echo ("<td>" . $data['EventDescription'] . "</td>");
        echo ("<td>" . $data['Time'] . "</td>");
        echo ("<td>" . $data['Date'] . "</td>");
        echo ("<td>" . $data['Venue'] . "</td>");
        echo ("</tr>");}
    ?>
    </table>

    <h2 id="badmintoncphotos"> Badminton Club Photos </h2>
    <p>
    <img src="../sdp_assignment/photo/badminton.jpg" width="350" height = "200">
    </p>      

    <h2 id="badmintonchierarchy"> Club Hierarchy </h2>
    <p>
    <img src="../sdp_assignment/photo/badmintonclub_hierarchy.jpg" width="430" height="600">
    </p>
</body>
</html>
