<?php
session_start();
include('../includes/database.php');

if(isset($_POST["delete_user"])){
   
    $id = mysqli_real_escape_string($conn, $_POST['id']);

    $sql = "DELETE FROM users WHERE id = '$id'";

    if(!mysqli_query($conn, $sql)){
        echo "<script>alert('Please try again.');window.location='../deleteProfile.php';</script>";
    exit();
        
    }else{
        $_SESSION["success"] = "Account has been deleted.";
        echo "<script>alert('Account has been deleted!!'); window.location='../indexprofile.php';</script>";
        exit();
    }
}
?>