<?php
	include 'conn.php';

	$ID=$_GET['ID'];

	$EventName=$_POST['evtname'];
    $Description=$_POST['desc'];
    $Time=$_POST['evttime'];
    $Date=$_POST['evtdate'];
    $Venue=$_POST['venue'];
    $OrganisingClub=$_POST['orgclub'];

	$sql= "UPDATE event set EventName='$EventName',EventDescription='$Description', Time='$Time', Date='$Date',  Venue='$Venue', OrganisingClub='$OrganisingClub' WHERE EventID='$ID'";
    
    if (mysqli_query($conn, $sql)) {
        echo "Event updated successfully";
    } else {
        echo "Event update failed: " . mysqli_error($conn);
    }
    header('refresh:5; url=ManageEvent.php');
    
    mysqli_close($conn);
?>