<?php
include("connect.php");
?>
<!DOCTYPE html>
<html>
<style>
.eventtable table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

.eventtable {
  border-collapse: collapse;
  width: 100%;
}

.eventtable th, td {
  padding: 15px;
}

</style>
    <head>
        <title>Basketball Club</title>
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
        Welcome to Basketball Club! Come and join us!
    </h1>

    <div class = "clubinformation">
        <ul>
        <li><a href="#basketballcdescrip">Our Description</a></li>    
        <li><a href="#basketballcevent">Upcoming Event</a></li>
        <li><a href="#basketballcphotos">Basketball Club Photos</a></li>
        <li><a href="#basketballchierarchy">Club Hierarchy</a></li>
        </ul>
    </div>

    <h2 id="basketballcdescrip"> Basketball Club Description </h2>
    <p>
        Our club provides a fun, and competitive badminton environment. The mission of our club is to educate and empower the members who love Basketball. Members will learn how to dribble, shoot, pass and new abilities to further their knowledge of basketball .
        Feel free to join us if interested!
    </p>

    <h2 id="basketballcevent"> Upcoming Event </h2>
    <table>
    <tr>
        <th>Event Name</th>
        <th>Event Description</th>
        <th>Time</th>
        <th>Date</th>
        <th>Venue</th>
    </tr>
    <?php
    $sql = "SELECT * FROM badmintonclubevent WHERE OrganisingClub LIKE 'Basketball Club'";
    $result = $con->query($sql) or die($con->error);
    
    while(($data = $result->fetch_assoc())!== null){
        echo ("<tr>");
        echo ("<td>" . $data['EventName'] . "</td>");
        echo ("<td>" . $data['EventDescription'] . "</td>");
        echo ("<td>" . $data['Time'] . "</td>");
        echo ("<td>" . $data['Date'] . "</td>");
        echo ("<td>" . $data['Venue'] . "</td>");
        echo ("</tr>");}
    ?>
    </table>

    <h2 id="basketballcphotos"> Basketball Club Photos </h2>
    <div class = "bballcphoto">
    <p>
    <img src="../sdp_assignment/photo/basketballphoto.jpg" width="350" height = "230">
    </p>      
    </div>

    <h2 id="basketballchierarchy"> Club Hierarchy </h2>
    <p>
    <img src="../sdp_assignment/photo/basketballclub_hierarchy.jpg" width="430" height="600">
    </p>   
</body>
</html>