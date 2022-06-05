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
        <title>Dancing Club</title>
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
        Welcome to Dancing Club! Come and join us!
    </h1>
    <div class = "clubinformation">
        <ul>
        <li><a href="#dancingcdescrip">Our Description</a></li>    
        <li><a href="#dancingcevent">Upcoming Event</a></li>
        <li><a href="#dancingcphotos">Dancing Club Photos</a></li>
        <li><a href="#dancingchierarchy">Club Hierarchy</a></li>
        </ul>
    </div>
    <h2 id="dancingcdescrip"> Dancing Club Description </h2>
    <p>
        Our club allows people to learn different types of dance styles such as Ballet, Hip Hop, Jazz, Modern Dance and lots more for you to explore! Do not worry if you does not have any dance experience, you just join us to learn to dance!
        Feel free to join us if interested in dancing!
    </p>   

    <h2 id="dancingcevent"> Upcoming Event </h2>
    <table>
    <tr>
        <th>Event Name</th>
        <th>Event Description</th>
        <th>Time</th>
        <th>Date</th>
        <th>Venue</th>
    </tr>
    <?php
    $sql = "SELECT * FROM event WHERE OrganisingClub LIKE 'Dancing Club' AND Status = 'Approved'";
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

    <h2 id="dancingcphotos"> Dancing Club Photos </h2>
    <p>
    <img src="../sdp_assignment/photo/dancingphoto.jpg" width="400" height = "270">
    </p>      

    <h2 id="dancingchierarchy"> Club Hierarchy </h2>
    <p>
    <img src="../sdp_assignment/photo/dancingclub_hierarchy.jpg" width="430" height="600">
    </p>
</body>
</html>