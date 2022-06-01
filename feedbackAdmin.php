<?php 
session_start();
include("includes/database.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Manage Feedback</title>
  </head>
  <body>

    <div class="container" style="margin-top:50px;">

    <h4 class="text-center">Manage Feedback</h4>

    <?php if(isset($_SESSION["success"])){ ?>
        <div class="alert alert-success" role="alert"> <?php echo $_SESSION["success"]; ?> </div>
    <?php } ?>
    <?php if(isset($_SESSION["error"])){ ?>
        <div class="alert alert-danger" role="alert"> <?php echo $_SESSION["error"]; ?> </div>
    <?php } ?>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Username</th>
                <th scope="col">Comment</th>
                <th scope="col">Time</th>
                <th scope="col">Status</th>
                <th scope="col">Operations</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $sql = "SELECT * FROM feedback ORDER BY submit_time DESC";
            $result = mysqli_query($conn, $sql);

            $counter = 1;
            while($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <th scope="row"><?php echo $counter++; ?></th>
                <td><?php echo $row["username"]; ?></td>
                <td><?php echo $row["comments"]; ?></td>
                <td><?php echo date("F d Y h:i a", strtotime($row["submit_time"])); ?></td>
                <td><?php echo $row["feedback_status"]; ?></td>
                <td>
                    <a href="view-feedback.php?id=<?php echo $row["feedback_id"]; ?>" class="btn btn-primary">Reply</a>
                    <a href="functions/updateFeedbackStatus.php?id=<?php echo $row["feedback_id"]; ?>&status=Approve" class="btn btn-success">Approve</a>
                    <a href="functions/updateFeedbackStatus.php?id=<?php echo $row["feedback_id"]; ?>&status=Draft" class="btn btn-warning">Draft</a>
                    <a href="functions/updateFeedbackStatus.php?id=<?php echo $row["feedback_id"]; ?>&status=Delete" class="btn btn-danger">Delete</a>
                </td>
            </tr>

            <?php } ?>
            
        </tbody>
        </table>
    </div>  

    <?php 
    unset($_SESSION["error"]);
    unset($_SESSION["success"]);
    ?>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
   
  </body>
</html>