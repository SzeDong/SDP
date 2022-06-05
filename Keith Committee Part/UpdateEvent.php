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
        echo '<script>alert("Event updated successfully!");
        window.location.href="ManageEvent.php";
        </script>';
    } else {
        echo '<script>alert("Event update failed, please try again!");
        window.location.href="ManageEvent.php";
        </script>'. mysqli_error($conn);
    }
    mysqli_close($conn);
?>