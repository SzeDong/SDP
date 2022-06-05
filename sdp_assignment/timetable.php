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
        <title>View Timetable</title>
    </head>
    <body>
        <h2>View Timetable</h2>

        <table>
        <tr>
            <th>Start Time</th>
            <th>End Time</th>
            <th>Venue</th>
            <th>Club Name</th>
        </tr>
        <?php
        $sql = "SELECT * FROM timetable";
        $result = $con->query($sql);
        
        while($data = $result->fetch_assoc()){
            echo ("<tr>");
            echo ("<td>" . $data['starttime'] . "</td>");
            echo ("<td>" . $data['endtime'] . "</td>");
            echo ("<td>" . $data['venue'] . "</td>");
            echo ("<td>" . $data['clubname'] . "</td>");
            echo ("</tr>");}
        ?>
    </table>
</body>
</html>