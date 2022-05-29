<?php
    include 'conn.php';

    $EventName = $_POST['evtname'];
    $Description = $_POST['desc'];
    $Time = $_POST['evttime'];
    $Date = $_POST['evtdate'];
    $Venue = $_POST['venue'];
    $OrgClub = $_POST['orgclub'];

    $sql = "INSERT INTO unapprovedevent (EventName, EventDescription, Time, Date, Venue, OrganisingClub) VALUES ('$EventName', '$Description', '$Time', '$Date', '$Venue', '$OrgClub');";

    if (mysqli_query($conn, $sql)) {
        echo "Event saved successfully";
    } else {
        echo "Event saved failed: " . mysqli_error($conn);
    }
            
    header('refresh:5; url=ManageEvent.php');

?>