<?php
	include 'conn.php';

	$ID=$_GET['ID'];

	$ClubName=$_POST['ClubName'];
	$ClubDescription=$_POST['ClubDescription'];
    $President=$_POST['President'];
    $VicePresident=$_POST['VicePresident'];
    $PhoneNumber=$_POST['PhoneNumber'];
    $Email=$_POST['Email'];

	$sql= "UPDATE registrationclub set ClubName='$ClubName', ClubDescription='$ClubDescription', President='$President', VicePresident='$VicePresident', PhoneNumber='$PhoneNumber', Email='$Email'";
    
    if (mysqli_query($conn, $sql)) {
        echo "Club Details Updated";
    } else {
        echo "Club Details not Updated: " . mysqli_error($conn);
    }
    /*header('refresh:5; url=ManageClub.php');*/
    
    mysqli_close($conn);
?>
