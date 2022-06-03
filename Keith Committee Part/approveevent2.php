<?php
    include 'conn.php';

    $ID=$_GET['ID'];
    $sql = "UPDATE event SET Status = 'Approved' WHERE EventID='$ID';";

    if (mysqli_query($conn, $sql)) {
        echo "Event approved";
    } else {
        echo "Event approve failed: " . mysqli_error($conn);
    }
            
    header('refresh:5; url=approveevent.php');

?>