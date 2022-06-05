<?php
include("conn.php");
?>

<!DOCTYPE html>
<html>
    <style>
    .announcement button[type="addbtn"]{
    background-color: #F10758;
    color: white;
    padding: 16px;
    font-size: 13px;
    border: none;
    }

    table, td, th {  
    border: 1px solid #ddd;
    text-align: left;
    }

    th, td {
    padding: 15px;
    }
    </style>

    <head>
        <title>View Announcement</title>
    </head>
    <body>
        <div class = announcement>
        <h2>View Announcement</h2>
        <form action="addannouncement.php">
        <button type="addbtn">Add Announcement</button>
        </form>
</div>
        <table>
        <tr>
            <th>Club Name</th>
            <th>Announcement Description</th>
        </tr>
        <?php
        $sql = "SELECT * FROM newannouncement";
        $result = $con->query($sql);
        
        while($data = $result->fetch_assoc()){
            echo ("<tr>");
            echo ("<td>" . $data['clubname'] . "</td>");
            echo ("<td>" . $data['announcementdescription'] . "</td>");
            echo ("</tr>");}
        ?>
    </table>
</body>
</html>