<?php
session_start();
include('../includes/database.php');

if(isset($_POST["editProfile"])){

    
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    $sql = "UPDATE users SET
    username = '$username',
    password = '$password', 
    email = '$email'
    WHERE id = '$id'";

    if(!mysqli_query($conn, $sql)){
        echo "<script>alert('Please insert data with correct format.');window.location='../editprofile.php';</script>";
    exit();
        
    }else{
        $_SESSION["success"] = "Details is updated successfully";
        echo "<script>alert('Update Successfully!!'); window.location='../userProfile.php';</script>";
        exit();
    }
}
?>
