<?php 

session_start();
include('../includes/database.php');

if(isset($_POST["submitFeedback"])){

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $comments = mysqli_real_escape_string($conn, $_POST['comments']);

    $sql = "INSERT INTO feedback (username, comments) VALUES ('$username', '$comments')";
    $ires = mysqli_query($conn, $sql);
    if(!$ires){
        $_SESSION["error"] = "Your Feedback Is Failed";
        header("Location: ../feedback.php");
        exit();
        
    }else{
        $_SESSION["success"] = "Your Feedback Is Summitted Successfully";
        header("Location: ../feedback.php");
        exit();
    }
}

?>