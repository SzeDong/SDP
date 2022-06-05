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
        <title>Student Council Club</title>
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
        Welcome to Student Council Club! Come and join us!
    </h1>
    <div class = "clubinformation">
        <ul>
        <li><a href="#scouncilcdescrip">Our Description</a></li>    
        <li><a href="#scouncilcevent">Upcoming Event</a></li>
        <li><a href="#scouncilcphotos">Student Council Club Photos</a></li>
        <li><a href="#scouncilchierarchy">Club Hierarchy</a></li>
        </ul>
    </div>
    <h2 id="scouncilcdescrip"> Student Council Club Description </h2>
    <p>
        The purpose of the student council club is to give the members an opportunity to develop leadership by organizing and carrying out school activities and service projects.
        Feel free to join us if interested!
    </p>   

    <h2 id="scouncilcevent"> Upcoming Event </h2>
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

    <h2 id="scouncilcphotos"> Student Council Club Photos </h2>
    <p>
    <img src="../sdp_assignment/photo/studentcouncilphoto.jpg" width="350" height = "230">
    </p>      

    <h2 id="scouncilchierarchy"> Club Hierarchy </h2>
    <p>
    <img src="../sdp_assignment/photo/scouncilclub_hierarchy.jpg" width="430" height="600">
    </p>
</body>
</html>