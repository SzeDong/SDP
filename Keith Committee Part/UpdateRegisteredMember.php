<?php
	include 'conn.php';

	$ID=$_GET['ID'];

    $MemberName=$_POST['MemberName'];
    $PhoneNumber=$_POST['PhoneNumber'];
    $Email=$_POST['PhoneNumber'];
	$EventName=$_POST['eventname'];

	$sql= "UPDATE eventmembers set MemberName='$MemberName', PhoneNumber='$PhoneNumber', PhoneNumber='$Email', EventName='$EventName' WHERE ID='$ID';";
    
    if (mysqli_query($conn, $sql)) {
        echo '<script>alert("Event signed up successfully!");
        window.location.href="ViewEvent.php";
        </script>';
    } else {
        echo '<script>alert("Event sign up failed, please try again!");
        window.location.href="ViewEvent.php";
        </script>'. mysqli_error($conn);
    }
    mysqli_close($conn);
?>