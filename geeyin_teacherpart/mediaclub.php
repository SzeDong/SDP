<?php
include("connect.php");
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
        <title>Media Club</title>
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
        Welcome to Media Club! Come and join us!
    </h1>
    <div class = "clubinformation">
        <ul>
        <li><a href="#mediacdescrip">Our Description</a></li>    
        <li><a href="#mediacevent">Upcoming Event</a></li>
        <li><a href="#mediacphotos">Media Club Photos</a></li>
        <li><a href="#mediachierarchy">Club Hierarchy</a></li>
        </ul>
    </div>
    <h2 id="mediacdescrip"> Media Club Description </h2>
    <p>
        Our club allow members to learn and understand more about photography, filming and handling PA equipment. Members are given the opportunity to develop their skills through training programs such as video editing, short film projects, photography courses, exhibitions, field trips and competitions. 
        Feel free to join us if interested!
    </p>  

    <h2 id="mediacevent"> Upcoming Event </h2>
    <table>
    <tr>
        <th>Event Name</th>
        <th>Event Description</th>
        <th>Time</th>
        <th>Date</th>
        <th>Venue</th>
    </tr>
    <?php
    $sql = "SELECT * FROM newevent WHERE OrganisingClub LIKE 'Media Club'";
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

    <h2 id="mediacphotos"> Media Club Photos </h2>
    <p>
    <img src="../sdp_assignment/photo/mediaclubphoto.jpg" width="350" height = "270">
    </p>      

    <h2 id="mediachierarchy"> Club Hierarchy </h2>
    <p>
    <img src="../sdp_assignment/photo/mediaclub_hierarchy.jpg" width="430" height="600">
    </p>
</body>
</html>