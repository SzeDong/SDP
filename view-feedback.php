<?php 
session_start();
include("includes/database.php");

if(!($_GET["id"])) {
    echo "<script>alert('Invalid Page'); window.history.go(-1);</script>";
    exit();
} 

$feedback_id = $_GET["id"];

$sql = "SELECT * FROM feedback 
LEFT JOIN feedback_replies
ON feedback.feedback_id = feedback_replies.feedback_id
WHERE feedback.feedback_id = '$feedback_id'";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>View Feedback</title>
  </head>
  <body>
    <div class="container" style="margin-top:50px;">

        <div class="panel panel-default">
            <div class = "panel-heading">Submit Your Comments</div>
        </div>
        <div class = "panel-body">
        <?php if(isset($_SESSION["success"])){ ?>
            <div class="alert alert-success" role="alert"> <?php echo $_SESSION["success"]; ?> </div>
        <?php } ?>
        <?php if(isset($_SESSION["error"])){ ?>
            <div class="alert alert-danger" role="alert"> <?php echo $_SESSION["error"]; ?> </div>
        <?php } ?>
            
            
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control" value="<?php echo $row["username"] ?>" disabled>
        </div>
        <div class= "form-group">
            <label>Comments</label>
            <textarea name="comments" class="form-control" cols="30" rows="5" disabled><?php echo $row["comments"] ?></textarea>
        </div>

        <?php 

        ?>

        <form action="functions/replyFeedback.php" method="POST"> 
            <label>Reply Feedback</label>
            <div class= "form-group">
                <label>Comments</label>

                <?php if(!empty($row["reply_comment"])) { ?>
                    <textarea name="reply_comment" class="form-control" cols="30" rows="10" disabled><?php if(!empty($row["reply_comment"])) { echo $row["reply_comment"]; } ?></textarea>
                <?php } else { ?>
                    <textarea name="reply_comment" class="form-control" cols="30" rows="10"></textarea>
                <?php } ?>
            </div>

            <?php if(!empty($row["reply_comment"])) { ?>
            <button class="btn btn-primary" disabled>Reply</button>
            <?php } else { ?>
                <input type="hidden" name="feedback_id" value="<?php echo $feedback_id; ?>"/>
                <button type="submit" name="replyFeedback" class="btn btn-primary">Reply</button>
            <?php } ?>
        </form>

        </div>
    </div>

    <?php 
    unset($_SESSION["error"]);
    unset($_SESSION["success"]);
    ?>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

  </body>
</html>