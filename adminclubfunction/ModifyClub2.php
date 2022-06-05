<?php
	include 'conn.php';

	$ID=$_GET['ID'];

	$ClubName=$_POST['ClubName'];
	$ClubDescription=$_POST['ClubDescription'];
    $President=$_POST['President'];
    $VicePresident=$_POST['VicePresident'];
    $PhoneNumber=$_POST['PhoneNumber'];
    $Email=$_POST['Email'];

	$sql= "UPDATE clubs set ClubName='$ClubName', ClubDescription='$ClubDescription', President='$President', VicePresident='$VicePresident', PhoneNumber='$PhoneNumber', Email='$Email' WHERE ClubID ='$ID';";
    
    if (mysqli_query($conn, $sql)) {
        echo "Club modified successfully";
    } else {
        echo "Club modify failed: " . mysqli_error($conn);
    }
    header('refresh:5; url=ViewClub.php');
    
    mysqli_close($conn);
?>