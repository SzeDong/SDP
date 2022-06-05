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
        echo '<script>alert("Club updated successfully!");
        window.location.href="ManageClub.php";
        </script>';
    } else {
        echo '<script>alert("Club update failed, please try again!");
        window.location.href="ManageClub.php";
        </script>'. mysqli_error($conn);
    }
    mysqli_close($conn);
?>