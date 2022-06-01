<?php 

session_start();
include('../includes/database.php');

if(isset($_POST["replyFeedback"])){

    $feedback_id = mysqli_real_escape_string($conn, $_POST['feedback_id']);
    $reply_comment = mysqli_real_escape_string($conn, $_POST['reply_comment']);

    $sql = "INSERT INTO feedback_replies (feedback_id, reply_comment) VALUES ('$feedback_id', '$reply_comment')";
    $ires = mysqli_query($conn, $sql);
    if(!$ires){
        $_SESSION["error"] = "Reply Feedback Failed";
        header("Location: ../feedbackAdmin.php");
        exit();
        
    }else{
        $_SESSION["success"] = "Reply Feedback Successfully";
        header("Location: ../feedbackAdmin.php");
        exit();
    }
}

?>