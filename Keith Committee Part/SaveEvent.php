<?php
    include 'conn.php';

    $EventName = $_POST['evtname'];
    $Description = $_POST['desc'];
    $Time = $_POST['evttime'];
    $Date = $_POST['evtdate'];
    $Venue = $_POST['venue'];
    $OrgClub = $_POST['orgclub'];

    $sql = "INSERT INTO event (EventName, EventDescription, Time, Date, Venue, OrganisingClub) VALUES ('$EventName', '$Description', '$Time', '$Date', '$Venue', '$OrgClub');";

    if (mysqli_query($conn, $sql)) {
        echo '<script>alert("Event created successfully!");
        window.location.href="CreateEvent.php";
        </script>';
    } else {
        echo '<script>alert("Event creation failed, please try again!");
        window.location.href="CreateEvent.php";
        </script>'. mysqli_error($conn);
    }
?>