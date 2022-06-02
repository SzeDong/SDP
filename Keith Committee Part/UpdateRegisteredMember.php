<?php
	include 'conn.php';

	$ID=$_GET['ID'];

    $MemberName=$_POST['MemberName'];
    $PhoneNumber=$_POST['PhoneNumber'];
    $Email=$_POST['PhoneNumber'];
	$EventName=$_POST['eventname'];

	$sql= "UPDATE eventmembers set MemberName='$MemberName', PhoneNumber='$PhoneNumber', PhoneNumber='$Email', EventName='$EventName' WHERE ID='$ID';";
    
    if (mysqli_query($conn, $sql)) {
        echo "Member updated successfully";
    } else {
        echo "Member update failed: " . mysqli_error($conn);
    }
    header('refresh:5; url=ViewEvent.php');
    
    mysqli_close($conn);
?>