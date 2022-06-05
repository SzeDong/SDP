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
        <title>Orchestra Club</title>
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
        Welcome to Orchestra Club! Come and join us!
    </h1>
    <div class = "clubinformation">
        <ul>
        <li><a href="#orchestracdescrip">Our Description</a></li>    
        <li><a href="#orchestracevent">Upcoming Event</a></li>
        <li><a href="#orchestracphotos">Orchestra Club Photos</a></li>
        <li><a href="#orchestrachierarchy">Club Hierarchy</a></li>
        </ul>
    </div>
    <h2 id="orchestracdescrip"> Orchestra Club Description </h2>
    <p>
        Our club is a fun club for people to has passion for music. Anyone who plays a musical instrument or would like to learn is welcome to join. Besides that, we will be having performances twice a year.
        Orchestra is a chance for the members to learn how to read, write and perform music. Members from all grade levels are welcome and do not need to have a background playing instruments. Anywhere from beginner to advanced is perfectly fine.
        Feel free to join us if interested!
    </p>   

    <h2 id="orchestracevent"> Upcoming Event </h2>
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

    <h2 id="orchestracphotos"> Orchestra Club Photos </h2>
    <p>
    <img src="../sdp_assignment/photo/basketballphoto.jpg" width="350" height = "270">
    </p>      

    <h2 id="orchestrachierarchy"> Club Hierarchy </h2>
    <p>
    <img src="../sdp_assignment/photo/orchestraclub_hierarchy.jpg" width="430" height="600">
    </p>
</body>
</html>